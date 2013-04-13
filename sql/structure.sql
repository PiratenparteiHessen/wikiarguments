-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 11. Apr 2013 um 17:51
-- Server Version: 5.5.30-30.1-log
-- PHP-Version: 5.3.3-7+squeeze15

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Datenbank: `wikiargument`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `arguments`
--

CREATE TABLE IF NOT EXISTS `arguments` (
  `argumentId` int(11) NOT NULL AUTO_INCREMENT,
  `questionId` int(11) NOT NULL,
  `parentId` int(11) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `userId` int(11) NOT NULL,
  `url` varchar(200) NOT NULL,
  `headline` varchar(100) NOT NULL,
  `abstract` varchar(200) NOT NULL,
  `details` text NOT NULL,
  `dateAdded` bigint(20) NOT NULL,
  `score` int(11) NOT NULL,
  PRIMARY KEY (`argumentId`),
  UNIQUE KEY `questionId` (`questionId`,`parentId`,`url`),
  KEY `userId` (`userId`,`questionId`),
  KEY `questionId_2` (`questionId`,`argumentId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `badwords`
--

CREATE TABLE IF NOT EXISTS `badwords` (
  `badwordId` int(11) NOT NULL,
  `category` tinyint(4) NOT NULL,
  `word` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `confirmation_codes`
--

CREATE TABLE IF NOT EXISTS `confirmation_codes` (
  `confirmationId` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `type` varchar(64) NOT NULL,
  `code` varchar(128) NOT NULL,
  `dateAdded` int(13) NOT NULL,
  PRIMARY KEY (`confirmationId`),
  UNIQUE KEY `userId` (`userId`,`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `groupId` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `ownerId` int(11) NOT NULL,
  `dateAdded` bigint(20) NOT NULL,
  `visibility` tinyint(4) NOT NULL,
  `url` varchar(250) NOT NULL,
  PRIMARY KEY (`groupId`),
  UNIQUE KEY `url` (`url`),
  KEY `title` (`title`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `group_permissions`
--

CREATE TABLE IF NOT EXISTS `group_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `groupId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `permission` int(11) NOT NULL,
  `dateAdded` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `groupId` (`groupId`,`userId`),
  KEY `userId` (`userId`,`permission`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `localization`
--

CREATE TABLE IF NOT EXISTS `localization` (
  `loc_key` varchar(255) NOT NULL,
  `loc_language` varchar(4) NOT NULL,
  `loc_val` text NOT NULL,
  PRIMARY KEY (`loc_language`,`loc_key`),
  KEY `loc_language` (`loc_language`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `notificationId` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `questionId` int(11) NOT NULL,
  `flags` int(11) NOT NULL,
  `dateAdded` bigint(20) NOT NULL,
  PRIMARY KEY (`notificationId`),
  UNIQUE KEY `questionId` (`questionId`,`userId`),
  KEY `userId` (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `pageId` int(11) NOT NULL AUTO_INCREMENT,
  `pageTitle` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `className` varchar(100) NOT NULL,
  `templateFile` varchar(100) NOT NULL,
  PRIMARY KEY (`pageId`),
  UNIQUE KEY `pageTitle` (`pageTitle`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `permissionId` int(11) NOT NULL AUTO_INCREMENT,
  `groupId` int(11) NOT NULL,
  `action` varchar(50) NOT NULL,
  `state` tinyint(4) NOT NULL,
  PRIMARY KEY (`permissionId`),
  UNIQUE KEY `groupId` (`groupId`,`action`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `questionId` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `url` varchar(200) NOT NULL,
  `details` text NOT NULL,
  `dateAdded` bigint(20) NOT NULL,
  `userId` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `scoreTrending` int(11) NOT NULL,
  `scoreTop` int(11) NOT NULL,
  `additionalData` text NOT NULL,
  `groupId` int(11) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `flags` tinyint(4) NOT NULL,
  PRIMARY KEY (`questionId`),
  UNIQUE KEY `url` (`url`),
  KEY `score` (`score`),
  KEY `scoreTrending` (`scoreTrending`),
  KEY `scoreTop` (`scoreTop`),
  KEY `type` (`type`,`groupId`,`questionId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `sessionId` varchar(32) NOT NULL,
  `sessionData` text NOT NULL,
  `sessionDate` int(11) NOT NULL,
  PRIMARY KEY (`sessionId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `signup_tokens`
--

CREATE TABLE IF NOT EXISTS `signup_tokens` (
  `tokenId` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(64) NOT NULL,
  PRIMARY KEY (`tokenId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sponsors`
--

CREATE TABLE IF NOT EXISTS `sponsors` (
  `sId` int(11) NOT NULL AUTO_INCREMENT,
  `sponsorId` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `logoWidth` int(11) NOT NULL,
  `logoHeight` int(11) NOT NULL,
  PRIMARY KEY (`sId`),
  KEY `sort` (`sort`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sponsors_data`
--

CREATE TABLE IF NOT EXISTS `sponsors_data` (
  `sponsorId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `companyName` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `slogan` varchar(255) NOT NULL,
  `paymentMethod` int(11) NOT NULL,
  `paymentData` text NOT NULL,
  `amount` int(11) NOT NULL,
  `dateAdded` int(11) NOT NULL,
  `approved` int(11) NOT NULL,
  `currentLogoApproved` int(11) NOT NULL,
  `logoHeight` int(11) NOT NULL,
  `logoWidth` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `additionalInformation` varchar(255) NOT NULL,
  PRIMARY KEY (`sponsorId`),
  KEY `amount` (`amount`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sponsors_payments`
--

CREATE TABLE IF NOT EXISTS `sponsors_payments` (
  `paymentId` int(11) NOT NULL AUTO_INCREMENT,
  `sponsorId` int(11) NOT NULL,
  `dateStart` int(11) NOT NULL,
  `dateEnd` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `dateApproved` int(11) NOT NULL,
  PRIMARY KEY (`paymentId`),
  KEY `sponsorId` (`sponsorId`,`dateStart`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `tagId` int(11) NOT NULL AUTO_INCREMENT,
  `questionId` int(11) NOT NULL,
  `tag` varchar(50) NOT NULL,
  `groupId` int(11) NOT NULL,
  PRIMARY KEY (`tagId`),
  KEY `tag` (`tag`,`questionId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `group` int(11) NOT NULL,
  `password` varchar(256) NOT NULL,
  `salt` varchar(128) NOT NULL,
  `dateAdded` bigint(20) NOT NULL,
  `user_last_action` bigint(20) NOT NULL,
  `scoreQuestions` int(11) NOT NULL,
  `scoreArguments` int(11) NOT NULL,
  PRIMARY KEY (`userId`),
  UNIQUE KEY `userName` (`userName`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user_factions`
--

CREATE TABLE IF NOT EXISTS `user_factions` (
  `factionId` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `questionId` int(11) NOT NULL,
  `state` tinyint(4) NOT NULL,
  PRIMARY KEY (`factionId`),
  KEY `userId` (`userId`,`questionId`),
  KEY `questionId` (`questionId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user_groups`
--

CREATE TABLE IF NOT EXISTS `user_groups` (
  `userId` int(11) NOT NULL,
  `groupId` int(11) NOT NULL,
  `dateAdded` bigint(20) NOT NULL,
  UNIQUE KEY `userId` (`userId`,`groupId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user_votes`
--

CREATE TABLE IF NOT EXISTS `user_votes` (
  `voteId` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `questionId` int(11) NOT NULL,
  `argumentId` int(11) NOT NULL,
  `vote` int(4) NOT NULL,
  `dateAdded` bigint(20) NOT NULL,
  PRIMARY KEY (`voteId`),
  KEY `userId` (`userId`,`questionId`,`argumentId`),
  KEY `questionIdArgumentId` (`questionId`,`argumentId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;
