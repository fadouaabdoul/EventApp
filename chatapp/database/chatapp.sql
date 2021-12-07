CREATE TABLE `chat_message` (
  `chat_message_id` int,
  `to_user_id` int,
  `from_user_id` int,
  `        chat_message` text,
  `           timestamp`            timestamp,
  `             status` int,
  PRIMARY KEY (`chat_message_id`)
);

CREATE TABLE `user` (
  `user_id ` int,
  `username` varchar(50),
  `password` varchar(10),
  `           country`         varchar(50),
  `            phone`           int(10),
  `             birth`            date,
  PRIMARY KEY (`user_id `)
);

CREATE TABLE `user_detail` (
  `user_detail_id ` int,
  `user_id` int,
  `last_activity` timestamp,
  `           is_type` <type>,
  PRIMARY KEY (`user_detail_id `)
);

CREATE TABLE `faq` (
  `faq_id` int,
  `user_id` int,
  `event_id` int,
  `         questions`              text,
  `         answers`              text,
  PRIMARY KEY (`faq_id`)
);

CREATE TABLE `event` (
  `event_id` int,
  `user_id` int,
  `faq_id` int,
  `             name`           varchar(50),
  `         description`              text,
  PRIMARY KEY (`event_id`)
);

