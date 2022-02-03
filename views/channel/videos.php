<?php
$yt->spfEnabled = true;
$yt->useModularCore = true;
$template = 'common/channel/videos';
$yt->modularCoreModules = ['www/channels'];
$yt->page = (object) [];

require_once('views/utils/extractUtils.php');
require_once('views/utils/channelUtils.php');
$ucid = ChannelUtils::getUcid($routerUrl);

include_once($root.'/innertubeHelper.php');

$innertubeBody = generateInnertubeInfoBase('WEB', '2.20200101.01.01', $visitor);
$innertubeBody->browseId = $ucid;
$yticfg = json_encode($innertubeBody);

$apiUrl = 'https://www.youtube.com/youtubei/v1/browse?key=AIzaSyAO_FJ2SlqU8Q4STEHLGCilw_Y9_11qcW8';

$ch = curl_init($apiUrl);

curl_setopt_array($ch, [
    CURLOPT_HTTPHEADER => ['Content-Type: application/json',
    'x-goog-visitor-id: ' . urlencode(encryptVisitorData($visitor))],
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => $yticfg,
    CURLOPT_FOLLOWLOCATION => 0,
    CURLOPT_HEADER => 0,
    CURLOPT_RETURNTRANSFER => 1
]);

$response = curl_exec($ch);
curl_close($ch);

$ytdata = json_decode($response);

// RESTRUCTING DATA TIME!!

/**
 * Header Reconstruct
 * 
 * This process is skipped if the header data is inaccessible,
 * i.e. in the event of an invalid response. On the off chance that
 * a channel is successfully returned without a header, this does not
 * halt the builder completely.
 */
if (isset($ytdata->header->c4TabbedHeaderRenderer)) {
    /**
     *  header: {
     *      "title": Channel title,
     *      "badges": Verification badges,
     *      "thumbnail": Thumbnails array containing channel thumbnail links,
     *      "banner": Channels4 banners array (if unspecified, the default will be used),
     *      "headerLinks": Channels4 banner links
     *      "tabs": Array of the channel's available tabs (appbar nav is also declared here),
     *      "subscriptionButton": Generic subscription button renderer,
     *  }
    */
    $yt->page->header = (object) [];
    $_h = $yt->page->header; // shorthand declaration
    $_oh = $ytdata->header->c4TabbedHeaderRenderer; // shorthand declaration
    // header.title:
    // ..title:
    $_h->title = $_oh->title ?? null;
    $yt->page->title = $_oh->title ?? null;
    // header.thumbnail:
    $_h->thumbnail = $_oh->avatar ?? null;
    if (isset($_h->thumbnail->thumbnails[0]->url)) {
        $_h->thumbnail->thumbnails[0]->url = ChannelUtils::synthesiseChannelAvatarSize100Url($_h->thumbnail->thumbnails[0]->url);
    }
    // header.banner:
    if (isset($_oh->banner)) {
        $_h->banner = $_oh->banner;
    } else {
        $_h->banner = (object) [
            'thumbnails' => [(object) [
                'url' => $_resourcePath($ytConstants, 'img', 'channels/c4/default_banner')
            ], null, null, (object) [
                'url' => $_resourcePath($ytConstants, 'img', 'channels/c4/default_banner_hq')
            ]]
        ];
    }
    // header.headerLinks:
    if (isset($_oh->headerLinks->channelHeaderLinksRenderer)) {
        $_h->headerLinks = $_oh->headerLinks->channelHeaderLinksRenderer;
        if (isset($_h->headerLinks->primaryLinks)) {
            $_h->headerLinks->primaryLinks[0]->href = 
                $_h->headerLinks->primaryLinks[0]->navigationEndpoint->urlEndpoint->url;
        }
        if (isset($_h->headerLinks->secondaryLinks)) {
            for ($i = 0, $j = count($_h->headerLinks->secondaryLinks); $i < $j; $i++) {
                $_h->headerLinks->secondaryLinks[$i]->href = 
                    $_h->headerLinks->secondaryLinks[$i]->navigationEndpoint->urlEndpoint->url;
            }
        }
    }
    // header.badges:
    if (isset($_oh->badges)) $_h->badges = $_oh->badges;
    // header.tabs:
    // ....appbarNav:
    if (isset($ytdata->contents->twoColumnBrowseResultsRenderer->tabs)) {
        $_ot = $ytdata->contents->twoColumnBrowseResultsRenderer->tabs;
        $_h->tabs = $_ot;
        $yt->appbarNav = (object) [];
        $yt->appbarNav->items = [];
        for ($i = 0, $j = count($_ot) - 1; $i < $j; $i++) {
            $yt->appbarNav->items[$i] = (object) [
                'title' => $_ot[$i]->tabRenderer->title,
                'selected' => $_ot[$i]->tabRenderer->selected,
                'href' => $_ot[$i]->tabRenderer->endpoint->commandMetadata->webCommandMetadata->url
            ];
        }
        $yt->appbarNav->owner = (object) [];
        $yt->appbarNav->items[0]->title = $_h->title ?? null;
        $yt->appbarNav->owner->title = $_h->title ?? null;
        $yt->appbarNav->owner->thumbnail = $_h->thumbnail ?? null;
    }
    // header.subscriptionButton:
    if (isset($_oh->subscribeButton)) {
        $_h->subscriptionButton = (object) [];
        $_hs = $_h->subscriptionButton; // shorthand
        if (isset($_oh->subscriberCountText)) {
            $_hs->subscriberCountText = ExtractUtils::isolateSubCnt($_getText($_oh->subscriberCountText));
            $_hs->shortSubscriberCountText = $_hs->subscriberCountText;
        }
    }
}