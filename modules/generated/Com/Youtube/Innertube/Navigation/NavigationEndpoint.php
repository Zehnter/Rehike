<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: innertube/navigation/navigation_endpoints.proto

namespace Com\Youtube\Innertube\Navigation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * Implements some of the definitions for InnerTube navigation endpoints.
 * 
 * The fun part is!!! Desktop YouTube doesn't really use protobuf, it uses
 * JSON. So I didn't have to get creative with the names.
 * &#64;author Taniko Yamamoto <kirasicecreamm&#64;gmail.com>
 *
 * Generated from protobuf message <code>com.youtube.innertube.navigation.NavigationEndpoint</code>
 */
class NavigationEndpoint extends \Google\Protobuf\Internal\Message
{
    /**
     * Define the values assigned to submessage types.
     * These IDs are all pretty insane and bloaty. Makes me wonder if
     * this is meant to be used as part of any particular, more expansive
     * subsystem rather than just navigation endpoints.
     * YouTube is, of course, a huge project and I bet that some parts of the
     * backend code have grown to be a mess.
     *
     * Generated from protobuf field <code>optional .com.youtube.innertube.navigation.NavigationEndpoint.BrowseEndpoint browse_endpoint = 48687626;</code>
     */
    protected $browse_endpoint = null;
    /**
     * Generated from protobuf field <code>optional .com.youtube.innertube.navigation.NavigationEndpoint.WatchEndpoint watch_endpoint = 48687757;</code>
     */
    protected $watch_endpoint = null;
    /**
     * Generated from protobuf field <code>optional .com.youtube.innertube.navigation.NavigationEndpoint.UrlEndpoint url_endpoint = 49679253;</code>
     */
    protected $url_endpoint = null;
    /**
     * Generated from protobuf field <code>optional .com.youtube.innertube.navigation.NavigationEndpoint.SearchEndpoint search_endpoint = 48687709;</code>
     */
    protected $search_endpoint = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Com\Youtube\Innertube\Navigation\NavigationEndpoint\BrowseEndpoint $browse_endpoint
     *           Define the values assigned to submessage types.
     *           These IDs are all pretty insane and bloaty. Makes me wonder if
     *           this is meant to be used as part of any particular, more expansive
     *           subsystem rather than just navigation endpoints.
     *           YouTube is, of course, a huge project and I bet that some parts of the
     *           backend code have grown to be a mess.
     *     @type \Com\Youtube\Innertube\Navigation\NavigationEndpoint\WatchEndpoint $watch_endpoint
     *     @type \Com\Youtube\Innertube\Navigation\NavigationEndpoint\UrlEndpoint $url_endpoint
     *     @type \Com\Youtube\Innertube\Navigation\NavigationEndpoint\SearchEndpoint $search_endpoint
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Innertube\Navigation\NavigationEndpoints::initOnce();
        parent::__construct($data);
    }

    /**
     * Define the values assigned to submessage types.
     * These IDs are all pretty insane and bloaty. Makes me wonder if
     * this is meant to be used as part of any particular, more expansive
     * subsystem rather than just navigation endpoints.
     * YouTube is, of course, a huge project and I bet that some parts of the
     * backend code have grown to be a mess.
     *
     * Generated from protobuf field <code>optional .com.youtube.innertube.navigation.NavigationEndpoint.BrowseEndpoint browse_endpoint = 48687626;</code>
     * @return \Com\Youtube\Innertube\Navigation\NavigationEndpoint\BrowseEndpoint|null
     */
    public function getBrowseEndpoint()
    {
        return $this->browse_endpoint;
    }

    public function hasBrowseEndpoint()
    {
        return isset($this->browse_endpoint);
    }

    public function clearBrowseEndpoint()
    {
        unset($this->browse_endpoint);
    }

    /**
     * Define the values assigned to submessage types.
     * These IDs are all pretty insane and bloaty. Makes me wonder if
     * this is meant to be used as part of any particular, more expansive
     * subsystem rather than just navigation endpoints.
     * YouTube is, of course, a huge project and I bet that some parts of the
     * backend code have grown to be a mess.
     *
     * Generated from protobuf field <code>optional .com.youtube.innertube.navigation.NavigationEndpoint.BrowseEndpoint browse_endpoint = 48687626;</code>
     * @param \Com\Youtube\Innertube\Navigation\NavigationEndpoint\BrowseEndpoint $var
     * @return $this
     */
    public function setBrowseEndpoint($var)
    {
        GPBUtil::checkMessage($var, \Com\Youtube\Innertube\Navigation\NavigationEndpoint\BrowseEndpoint::class);
        $this->browse_endpoint = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .com.youtube.innertube.navigation.NavigationEndpoint.WatchEndpoint watch_endpoint = 48687757;</code>
     * @return \Com\Youtube\Innertube\Navigation\NavigationEndpoint\WatchEndpoint|null
     */
    public function getWatchEndpoint()
    {
        return $this->watch_endpoint;
    }

    public function hasWatchEndpoint()
    {
        return isset($this->watch_endpoint);
    }

    public function clearWatchEndpoint()
    {
        unset($this->watch_endpoint);
    }

    /**
     * Generated from protobuf field <code>optional .com.youtube.innertube.navigation.NavigationEndpoint.WatchEndpoint watch_endpoint = 48687757;</code>
     * @param \Com\Youtube\Innertube\Navigation\NavigationEndpoint\WatchEndpoint $var
     * @return $this
     */
    public function setWatchEndpoint($var)
    {
        GPBUtil::checkMessage($var, \Com\Youtube\Innertube\Navigation\NavigationEndpoint\WatchEndpoint::class);
        $this->watch_endpoint = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .com.youtube.innertube.navigation.NavigationEndpoint.UrlEndpoint url_endpoint = 49679253;</code>
     * @return \Com\Youtube\Innertube\Navigation\NavigationEndpoint\UrlEndpoint|null
     */
    public function getUrlEndpoint()
    {
        return $this->url_endpoint;
    }

    public function hasUrlEndpoint()
    {
        return isset($this->url_endpoint);
    }

    public function clearUrlEndpoint()
    {
        unset($this->url_endpoint);
    }

    /**
     * Generated from protobuf field <code>optional .com.youtube.innertube.navigation.NavigationEndpoint.UrlEndpoint url_endpoint = 49679253;</code>
     * @param \Com\Youtube\Innertube\Navigation\NavigationEndpoint\UrlEndpoint $var
     * @return $this
     */
    public function setUrlEndpoint($var)
    {
        GPBUtil::checkMessage($var, \Com\Youtube\Innertube\Navigation\NavigationEndpoint\UrlEndpoint::class);
        $this->url_endpoint = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .com.youtube.innertube.navigation.NavigationEndpoint.SearchEndpoint search_endpoint = 48687709;</code>
     * @return \Com\Youtube\Innertube\Navigation\NavigationEndpoint\SearchEndpoint|null
     */
    public function getSearchEndpoint()
    {
        return $this->search_endpoint;
    }

    public function hasSearchEndpoint()
    {
        return isset($this->search_endpoint);
    }

    public function clearSearchEndpoint()
    {
        unset($this->search_endpoint);
    }

    /**
     * Generated from protobuf field <code>optional .com.youtube.innertube.navigation.NavigationEndpoint.SearchEndpoint search_endpoint = 48687709;</code>
     * @param \Com\Youtube\Innertube\Navigation\NavigationEndpoint\SearchEndpoint $var
     * @return $this
     */
    public function setSearchEndpoint($var)
    {
        GPBUtil::checkMessage($var, \Com\Youtube\Innertube\Navigation\NavigationEndpoint\SearchEndpoint::class);
        $this->search_endpoint = $var;

        return $this;
    }

}
