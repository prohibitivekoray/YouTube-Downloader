<?php

/*
 * PHP script for downloading videos from youtube
 * Copyright (C) 2012-2017  John Eckman
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, see <http://www.gnu.org/licenses/>.
 */

namespace YoutubeDownloader\Cache;

/**
 * Trait for Cache-aware instances
 */
trait CacheAwareTrait
{
	/**
	 * @var YoutubeDownloader\Cache\Cache
	 */
	private $cache;

	/**
	 * Sets a cache instance on the object
	 *
	 * @param Cache $cache
	 * @return null
	 */
	public function setCache(Cache $cache)
	{
		$this->cache = $cache;
	}

	/**
	 * Gets a cache instance
	 *
	 * @return Cache
	 */
	public function getCache()
	{
		if ( $this->cache === null )
		{
			$this->cache = new NullCache;
		}

		return $this->cache;
	}
}
