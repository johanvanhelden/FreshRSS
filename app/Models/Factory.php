<?php

class FreshRSS_Factory {

	public static function createFeedDao($username = null) {
		$db = Minz_Configuration::dataBase();
		if ($db['type'] === 'sqlite') {
			return new FreshRSS_FeedDAOSQLite($username);
		} else {
			return new FreshRSS_FeedDAO($username);
		}
	}

	public static function createEntryDao($username = null) {
		$db = Minz_Configuration::dataBase();
		if ($db['type'] === 'sqlite') {
			return new FreshRSS_EntryDAOSQLite($username);
		} else {
			return new FreshRSS_EntryDAO($username);
		}
	}

	public static function createStatsDAO($username = null) {
		$db = Minz_Configuration::dataBase();
		if ($db['type'] === 'sqlite') {
			return new FreshRSS_StatsDAOSQLite($username);
		} else {
			return new FreshRSS_StatsDAO($username);
		}
	}

}
