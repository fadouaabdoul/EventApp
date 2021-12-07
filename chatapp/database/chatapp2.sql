
--
-- Table structure for table `chat_message`
--

CREATE TABLE `chat_message` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_message`
--

INSERT INTO `chat_message` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(1, 1, 4, 'hi', '2019-01-30 06:54:05', 0),
(2, 4, 1, 'hello', '2019-01-30 06:54:20', 0),
(3, 4, 1, 'hello', '2019-01-30 07:09:23', 0),
(4, 1, 4, 'hello, how may I hep you?', '2019-01-30 07:09:41', 0),
(5, 4, 1, 'wifi is not working.', '2019-01-30 07:09:56', 0),
(6, 1, 4, 'did you check the faq?', '2019-01-30 07:10:20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
`country` varchar(255) NOT NULL,
`phone` int(25) NOT NULL,
`birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ; 
--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `country`, `phone`, `birth`) VALUES
(1, 'admin', '$2y$10$C/NW5VuUZiwPj443n5zHR.kL5c15vxCGFl0I0OGdcmBmbwONkGhU.', 'maroc', '123456765', '02-02-2000'),
(4, 'user', '$2y$10$3sm/kp8E9QC1EzuVIq0V2.NZcgDPzm2ZStxg6pI5QUcEOvDXKMHzy', 'maroc', '123456765', '02-02-2000');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_detail` (
  `user_detail_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_type` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`user_detail_id`, `user_id`, `last_activity`, `is_type`) VALUES
(1, 1, '2019-01-30 06:56:57', 'no'),
(2, 1, '2019-01-30 06:51:44', 'no'),
(3, 4, '2019-01-30 06:56:34', 'no'),
(4, 1, '2019-01-30 06:57:08', 'no'),
(5, 1, '2019-01-30 06:57:57', 'no'),
(6, 1, '2019-01-30 07:01:42', 'no'),
(7, 1, '2019-01-30 07:10:44', 'no'),
(8, 4, '2019-01-30 07:12:22', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`user_detail_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `user_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;


--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faq_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `questions` text NOT NULL,
  `answers` text NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `faq`
  ADD PRIMARY KEY (`faq_id`);


--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `faq_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 


ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);