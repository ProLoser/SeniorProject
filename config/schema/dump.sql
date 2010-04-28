



-- ---
-- Globals
-- ---

-- SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
-- SET FOREIGN_KEY_CHECKS=0;

-- ---
-- Table 'line_items'
-- 
-- ---

DROP TABLE IF EXISTS `line_items`;
		
CREATE TABLE `line_items` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `booking_id` INTEGER NOT NULL,
  `price_id` INTEGER NOT NULL,
  `created` DATETIME NOT NULL,
  `modified` DATETIME NOT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'pages'
-- 
-- ---

DROP TABLE IF EXISTS `pages`;
		
CREATE TABLE `pages` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `price_id` INTEGER NOT NULL,
  `short_title` INTEGER NOT NULL,
  `title` VARCHAR(100) NOT NULL,
  `slug` VARCHAR(100) NOT NULL,
  `contents` MEDIUMTEXT NOT NULL,
  `created` DATETIME NOT NULL,
  `modified` DATETIME NOT NULL,
  `meta_description` INTEGER NOT NULL,
  `meta_keywords` INTEGER NOT NULL,
  `location_id` INTEGER NOT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'employees'
-- Level 0 (recruiters), Level 1, Level 2, Level 3, Level 4, Level 5
-- ---

DROP TABLE IF EXISTS `employees`;
		
CREATE TABLE `employees` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `office_id` INTEGER NOT NULL,
  `status` INTEGER NOT NULL,
  `name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(150) NOT NULL,
  `phone` VARCHAR(15) NOT NULL,
  `address` VARCHAR(150) NOT NULL,
  `department` VARCHAR(100) NOT NULL,
  `disabled` TINYINT(1) NOT NULL,
  `created` DATETIME NOT NULL,
  `modified` DATETIME NOT NULL,
  `user_id` INTEGER DEFAULT NULL,
  PRIMARY KEY (`id`)
) COMMENT='Level 0 (recruiters), Level 1, Level 2, Level 3, Level 4, Le';

-- ---
-- Table 'roles'
-- 
-- ---

DROP TABLE IF EXISTS `roles`;
		
CREATE TABLE `roles` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(150) NOT NULL,
  `description` MEDIUMTEXT NOT NULL,
  `created` DATETIME NOT NULL,
  `modified` DATETIME NOT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'documents'
-- 
-- ---

DROP TABLE IF EXISTS `documents`;
		
CREATE TABLE `documents` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(100) NOT NULL,
  `volunteer_id` INTEGER NOT NULL,
  `description` MEDIUMTEXT NOT NULL,
  `created` DATETIME NOT NULL,
  `modified` DATETIME NOT NULL,
  `checked` TINYINT(1) NOT NULL,
  `attachment_file_name` VARCHAR(255) NOT NULL,
  `attachment_file_size` INTEGER NOT NULL,
  `attachment_meta_type` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'locations'
-- 
-- ---

DROP TABLE IF EXISTS `locations`;
		
CREATE TABLE `locations` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `currency_code` VARCHAR(4) NOT NULL,
  `name` VARCHAR(150) NOT NULL,
  `short_code` VARCHAR(100) NOT NULL,
  `office_id` INTEGER NOT NULL,
  `created` DATETIME NOT NULL,
  `modified` DATETIME NOT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'schools'
-- 
-- ---

DROP TABLE IF EXISTS `schools`;
		
CREATE TABLE `schools` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `location` MEDIUMTEXT NOT NULL,
  `office_id` INTEGER NOT NULL,
  `created` DATETIME NOT NULL,
  `modified` DATETIME NOT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'recruiter_meetings'
-- 
-- ---

DROP TABLE IF EXISTS `recruiter_meetings`;
		
CREATE TABLE `recruiter_meetings` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `time` DATETIME NOT NULL,
  `location` MEDIUMTEXT NOT NULL,
  `school_id` INTEGER NOT NULL,
  `employee_id` INTEGER NOT NULL,
  `created` DATETIME NOT NULL,
  `modified` DATETIME NOT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'volunteers'
-- 
-- ---

DROP TABLE IF EXISTS `volunteers`;
		
CREATE TABLE `volunteers` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `last_name` VARCHAR(150) NOT NULL,
  `first_name` VARCHAR(150) NOT NULL,
  `middle_name` VARCHAR(150) NOT NULL,
  `nickname` VARCHAR(150) NOT NULL,
  `current_address` VARCHAR(150) NOT NULL,
  `current_city` VARCHAR(150) NOT NULL,
  `current_state` VARCHAR(150) NOT NULL,
  `current_zip` VARCHAR(9) NOT NULL,
  `current_country` VARCHAR(150) NOT NULL,
  `permanent_address` VARCHAR(150) NOT NULL,
  `permanent_city` VARCHAR(150) NOT NULL,
  `permanent_state` VARCHAR(50) NOT NULL,
  `permanent_zip` VARCHAR(9) NOT NULL,
  `permanent_country` VARCHAR(150) NOT NULL,
  `passport` VARCHAR(150) NOT NULL,
  `passport_country` VARCHAR(150) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `created` DATETIME NOT NULL,
  `modified` DATETIME NOT NULL,
  `last_login` DATETIME NOT NULL,
  `referral` MEDIUMTEXT NOT NULL,
  `phone` VARCHAR(15) NOT NULL,
  `gender` VARCHAR(10) NOT NULL,
  `age` INTEGER NOT NULL,
  `mobile_phone` VARCHAR(10) NOT NULL,
  `university` VARCHAR(150) NOT NULL,
  `university_major` VARCHAR(150) NOT NULL,
  `country_of_birth` VARCHAR(150) NOT NULL,
  `country_of_residence` VARCHAR(150) NOT NULL,
  `citizenship` VARCHAR(150) NOT NULL,
  `alternate_email` VARCHAR(150) NOT NULL,
  `primary_emergency_contact` VARCHAR(150) NOT NULL,
  `primary_emergency_relationship` VARCHAR(150) NOT NULL,
  `primary_emergency_phone` VARCHAR(15) NOT NULL,
  `primary_emergency_email` VARCHAR(150) NOT NULL,
  `secondary_emergency_contact` VARCHAR(150) NOT NULL,
  `secondary_emergency_relationship` VARCHAR(150) NOT NULL,
  `secondary_emergency_phone` VARCHAR(15) NOT NULL,
  `secondary_emergency_email` VARCHAR(150) NOT NULL,
  `grade_level` VARCHAR(150) NOT NULL,
  `medical_conditions` VARCHAR(150) NOT NULL,
  `medical_condition_comments` MEDIUMTEXT NOT NULL,
  `allergies` VARCHAR(150) NOT NULL,
  `allergies_comments` MEDIUMTEXT NOT NULL,
  `hospitalization` VARCHAR(100) NOT NULL,
  `hospitalization_comments` MEDIUMTEXT NOT NULL,
  `prescription_medication` VARCHAR(150) NOT NULL,
  `prescription_medication_comments` MEDIUMTEXT NOT NULL,
  `diet` VARCHAR(150) NOT NULL,
  `diet_comments` MEDIUMTEXT NOT NULL,
  `shirt_size` VARCHAR(50) NOT NULL,
  `date_summer` DATE NOT NULL,
  `date_fall` DATE NOT NULL,
  `hobbies` MEDIUMTEXT NOT NULL,
  `project_preference` VARCHAR(200) NOT NULL,
  `interests` VARCHAR(150) NOT NULL,
  `location_id` INTEGER DEFAULT NULL,
  `user_id` INTEGER DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'programs'
-- 
-- ---

DROP TABLE IF EXISTS `programs`;
		
CREATE TABLE `programs` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(200) NOT NULL,
  `description` MEDIUMTEXT NOT NULL,
  `created` DATETIME NOT NULL,
  `modified` DATETIME NOT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'destinations'
-- 
-- ---

DROP TABLE IF EXISTS `destinations`;
		
CREATE TABLE `destinations` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `created` DATETIME NOT NULL,
  `modified` DATETIME NOT NULL,
  `name` MEDIUMTEXT NOT NULL,
  `description` MEDIUMTEXT NOT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'prices'
-- 
-- ---

DROP TABLE IF EXISTS `prices`;
		
CREATE TABLE `prices` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `foreign_id` INTEGER NOT NULL,
  `foreign_model` VARCHAR(10) NOT NULL,
  `location_id` INTEGER NOT NULL,
  `price` DECIMAL(8,2) NOT NULL,
  `created` DATETIME NOT NULL,
  `modified` DATETIME NOT NULL,
  `hidden` TINYINT(1) DEFAULT '0',
  `active` TINYINT(1) NOT NULL DEFAULT '1',
  `expires` DATE NOT NULL,
  `activates` DATE NOT NULL,
  `original_slots_available` INTEGER DEFAULT NULL,
  `current_slots_available` INTEGER DEFAULT NULL,
  `line_item_count` INTEGER NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'offices'
-- United States, Australia, United Kingdom
-- ---

DROP TABLE IF EXISTS `offices`;
		
CREATE TABLE `offices` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `location` MEDIUMTEXT NOT NULL,
  `created` DATETIME NOT NULL,
  `modified` DATETIME NOT NULL,
  PRIMARY KEY (`id`)
) COMMENT='United States, Australia, United Kingdom';

-- ---
-- Table 'signups'
-- 
-- ---

DROP TABLE IF EXISTS `signups`;
		
CREATE TABLE `signups` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `volunteer_id` INTEGER NOT NULL,
  `school_id` INTEGER NOT NULL,
  `employee_id` INTEGER NOT NULL,
  `name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(150) NOT NULL,
  `phone` VARCHAR(15) NOT NULL,
  `created` DATETIME NOT NULL,
  `modified` DATETIME NOT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'bookings'
-- The package booked for a volunteer
-- ---

DROP TABLE IF EXISTS `bookings`;
		
CREATE TABLE `bookings` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `volunteer_id` INTEGER NOT NULL,
  `accepted` TINYINT(1) NOT NULL,
  `created` DATETIME NOT NULL,
  `modified` DATETIME NOT NULL,
  `payment_id` INTEGER NOT NULL,
  `paid` TINYINT(1) NOT NULL DEFAULT '0',
  `cancelled` TINYINT(1) NOT NULL DEFAULT '0',
  `line_item_count` INTEGER NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) COMMENT='The package booked for a volunteer';

-- ---
-- Table 'spanish_profiles'
-- 
-- ---

DROP TABLE IF EXISTS `spanish_profiles`;
		
CREATE TABLE `spanish_profiles` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `proficiency_level` VARCHAR(255) NOT NULL,
  `homestay` TINYINT(1) NOT NULL,
  `volunteer_id` INTEGER NOT NULL,
  `booking_id` INTEGER NOT NULL,
  `created` DATETIME NOT NULL,
  `modified` DATETIME NOT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'ecuador_profiles'
-- 
-- ---

DROP TABLE IF EXISTS `ecuador_profiles`;
		
CREATE TABLE `ecuador_profiles` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `volunteer_id` INTEGER NOT NULL,
  `booking_id` INTEGER NOT NULL,
  `created` DATETIME NOT NULL,
  `modified` DATETIME NOT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'promos'
-- 
-- ---

DROP TABLE IF EXISTS `promos`;
		
CREATE TABLE `promos` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(150) NOT NULL,
  `description` MEDIUMTEXT NOT NULL,
  `created` DATETIME NOT NULL,
  `modified` DATETIME NOT NULL,
  `expires` DATE NOT NULL,
  `activates` DATE NOT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'menus'
-- 
-- ---

DROP TABLE IF EXISTS `menus`;
		
CREATE TABLE `menus` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `parent_id` INTEGER DEFAULT NULL,
  `page_id` INTEGER NOT NULL,
  `lft` INTEGER NOT NULL,
  `rght` INTEGER NOT NULL,
  `path` INTEGER NOT NULL,
  `name` VARCHAR(150) NOT NULL,
  `created` DATETIME NOT NULL,
  `modified` DATETIME NOT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'addons'
-- 
-- ---

DROP TABLE IF EXISTS `addons`;
		
CREATE TABLE `addons` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(200) NOT NULL,
  `description` MEDIUMTEXT NOT NULL,
  `created` DATETIME NOT NULL,
  `modified` DATETIME NOT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'fees'
-- 
-- ---

DROP TABLE IF EXISTS `fees`;
		
CREATE TABLE `fees` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(150) NOT NULL,
  `description` MEDIUMTEXT NOT NULL,
  `created` DATETIME NOT NULL,
  `modified` DATETIME NOT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'addon_combinations'
-- 
-- ---

DROP TABLE IF EXISTS `addon_combinations`;
		
CREATE TABLE `addon_combinations` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `base_combination_id` INTEGER NOT NULL,
  `addon_id` INTEGER NOT NULL,
  `created` DATETIME NOT NULL,
  `modified` DATETIME NOT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'base_combinations'
-- 
-- ---

DROP TABLE IF EXISTS `base_combinations`;
		
CREATE TABLE `base_combinations` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `destination_id` INTEGER NOT NULL,
  `program_id` INTEGER NOT NULL,
  `created` DATETIME NOT NULL,
  `modified` DATETIME NOT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'donations'
-- 
-- ---

DROP TABLE IF EXISTS `donations`;
		
CREATE TABLE `donations` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(150) NOT NULL,
  `description` MEDIUMTEXT NOT NULL,
  `amount` DECIMAL(8,2) NOT NULL,
  `reason` MEDIUMTEXT NOT NULL,
  `volunteer_name` VARCHAR(150) NOT NULL,
  `created` DATETIME NOT NULL,
  `modified` DATETIME NOT NULL,
  `payment_id` INTEGER NOT NULL,
  `booking_id` INTEGER NOT NULL,
  `volunteer_id` INTEGER NOT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'users'
-- 
-- ---

DROP TABLE IF EXISTS `users`;
		
CREATE TABLE `users` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(140) NOT NULL,
  `password` VARCHAR(40) NOT NULL,
  `email` VARCHAR(150) NOT NULL,
  `role_id` INTEGER NOT NULL,
  `location_id` INTEGER NOT NULL,
  `created` DATETIME NOT NULL,
  `modified` DATETIME NOT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'campus_summaries'
-- 
-- ---

DROP TABLE IF EXISTS `campus_summaries`;
		
CREATE TABLE `campus_summaries` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `id_employees` INTEGER NOT NULL,
  `id_schools` INTEGER NOT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Foreign Keys 
-- ---

ALTER TABLE `line_items` ADD FOREIGN KEY (booking_id) REFERENCES `bookings` (`id`);
ALTER TABLE `line_items` ADD FOREIGN KEY (price_id) REFERENCES `prices` (`id`);
ALTER TABLE `pages` ADD FOREIGN KEY (price_id) REFERENCES `prices` (`id`);
ALTER TABLE `pages` ADD FOREIGN KEY (location_id) REFERENCES `locations` (`id`);
ALTER TABLE `employees` ADD FOREIGN KEY (office_id) REFERENCES `offices` (`id`);
ALTER TABLE `employees` ADD FOREIGN KEY (user_id) REFERENCES `users` (`id`);
ALTER TABLE `documents` ADD FOREIGN KEY (volunteer_id) REFERENCES `volunteers` (`id`);
ALTER TABLE `locations` ADD FOREIGN KEY (office_id) REFERENCES `offices` (`id`);
ALTER TABLE `schools` ADD FOREIGN KEY (office_id) REFERENCES `offices` (`id`);
ALTER TABLE `recruiter_meetings` ADD FOREIGN KEY (school_id) REFERENCES `schools` (`id`);
ALTER TABLE `recruiter_meetings` ADD FOREIGN KEY (employee_id) REFERENCES `employees` (`id`);
ALTER TABLE `volunteers` ADD FOREIGN KEY (location_id) REFERENCES `locations` (`id`);
ALTER TABLE `volunteers` ADD FOREIGN KEY (user_id) REFERENCES `users` (`id`);
ALTER TABLE `prices` ADD FOREIGN KEY (foreign_id) REFERENCES `addon_combinations` (`id`);
ALTER TABLE `prices` ADD FOREIGN KEY (foreign_id) REFERENCES `base_combinations` (`id`);
ALTER TABLE `prices` ADD FOREIGN KEY (foreign_id) REFERENCES `fees` (`id`);
ALTER TABLE `prices` ADD FOREIGN KEY (foreign_id) REFERENCES `promos` (`id`);
ALTER TABLE `prices` ADD FOREIGN KEY (location_id) REFERENCES `locations` (`id`);
ALTER TABLE `signups` ADD FOREIGN KEY (volunteer_id) REFERENCES `volunteers` (`id`);
ALTER TABLE `signups` ADD FOREIGN KEY (school_id) REFERENCES `schools` (`id`);
ALTER TABLE `signups` ADD FOREIGN KEY (employee_id) REFERENCES `employees` (`id`);
ALTER TABLE `bookings` ADD FOREIGN KEY (volunteer_id) REFERENCES `volunteers` (`id`);
ALTER TABLE `spanish_profiles` ADD FOREIGN KEY (volunteer_id) REFERENCES `volunteers` (`id`);
ALTER TABLE `spanish_profiles` ADD FOREIGN KEY (booking_id) REFERENCES `bookings` (`id`);
ALTER TABLE `ecuador_profiles` ADD FOREIGN KEY (volunteer_id) REFERENCES `volunteers` (`id`);
ALTER TABLE `ecuador_profiles` ADD FOREIGN KEY (booking_id) REFERENCES `bookings` (`id`);
ALTER TABLE `menus` ADD FOREIGN KEY (parent_id) REFERENCES `menus` (`id`);
ALTER TABLE `menus` ADD FOREIGN KEY (page_id) REFERENCES `pages` (`id`);
ALTER TABLE `addon_combinations` ADD FOREIGN KEY (base_combination_id) REFERENCES `base_combinations` (`id`);
ALTER TABLE `addon_combinations` ADD FOREIGN KEY (addon_id) REFERENCES `addons` (`id`);
ALTER TABLE `base_combinations` ADD FOREIGN KEY (destination_id) REFERENCES `destinations` (`id`);
ALTER TABLE `base_combinations` ADD FOREIGN KEY (program_id) REFERENCES `programs` (`id`);
ALTER TABLE `donations` ADD FOREIGN KEY (booking_id) REFERENCES `bookings` (`id`);
ALTER TABLE `donations` ADD FOREIGN KEY (volunteer_id) REFERENCES `volunteers` (`id`);
ALTER TABLE `users` ADD FOREIGN KEY (role_id) REFERENCES `roles` (`id`);
ALTER TABLE `users` ADD FOREIGN KEY (location_id) REFERENCES `locations` (`id`);
ALTER TABLE `campus_summaries` ADD FOREIGN KEY (id_employees) REFERENCES `employees` (`id`);
ALTER TABLE `campus_summaries` ADD FOREIGN KEY (id_schools) REFERENCES `schools` (`id`);

-- ---
-- Table Properties
-- ---

-- ALTER TABLE `line_items` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `pages` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `employees` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `roles` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `documents` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `locations` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `schools` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `recruiter_meetings` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `volunteers` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `programs` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `destinations` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `prices` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `offices` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `signups` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `bookings` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `spanish_profiles` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `ecuador_profiles` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `promos` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `menus` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `addons` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `fees` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `addon_combinations` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `base_combinations` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `donations` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `users` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `campus_summaries` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ---
-- Test Data
-- ---

-- INSERT INTO `line_items` (`id`,`booking_id`,`price_id`,`created`,`modified`) VALUES
-- ('','','','','');
-- INSERT INTO `pages` (`id`,`price_id`,`short_title`,`title`,`slug`,`contents`,`created`,`modified`,`meta_description`,`meta_keywords`,`location_id`) VALUES
-- ('','','','','','','','','','','');
-- INSERT INTO `employees` (`id`,`office_id`,`status`,`name`,`email`,`phone`,`address`,`department`,`disabled`,`created`,`modified`,`user_id`) VALUES
-- ('','','','','','','','','','','','');
-- INSERT INTO `roles` (`id`,`name`,`description`,`created`,`modified`) VALUES
-- ('','','','','');
-- INSERT INTO `documents` (`id`,`type`,`volunteer_id`,`description`,`created`,`modified`,`checked`,`attachment_file_name`,`attachment_file_size`,`attachment_meta_type`) VALUES
-- ('','','','','','','','','','');
-- INSERT INTO `locations` (`id`,`currency_code`,`name`,`short_code`,`office_id`,`created`,`modified`) VALUES
-- ('','','','','','','');
-- INSERT INTO `schools` (`id`,`name`,`location`,`office_id`,`created`,`modified`) VALUES
-- ('','','','','','');
-- INSERT INTO `recruiter_meetings` (`id`,`time`,`location`,`school_id`,`employee_id`,`created`,`modified`) VALUES
-- ('','','','','','','');
-- INSERT INTO `volunteers` (`id`,`last_name`,`first_name`,`middle_name`,`nickname`,`current_address`,`current_city`,`current_state`,`current_zip`,`current_country`,`permanent_address`,`permanent_city`,`permanent_state`,`permanent_zip`,`permanent_country`,`passport`,`passport_country`,`email`,`created`,`modified`,`last_login`,`referral`,`phone`,`gender`,`age`,`mobile_phone`,`university`,`university_major`,`country_of_birth`,`country_of_residence`,`citizenship`,`alternate_email`,`primary_emergency_contact`,`primary_emergency_relationship`,`primary_emergency_phone`,`primary_emergency_email`,`secondary_emergency_contact`,`secondary_emergency_relationship`,`secondary_emergency_phone`,`secondary_emergency_email`,`grade_level`,`medical_conditions`,`medical_condition_comments`,`allergies`,`allergies_comments`,`hospitalization`,`hospitalization_comments`,`prescription_medication`,`prescription_medication_comments`,`diet`,`diet_comments`,`shirt_size`,`date_summer`,`date_fall`,`hobbies`,`project_preference`,`interests`,`location_id`,`user_id`) VALUES
-- ('','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
-- INSERT INTO `programs` (`id`,`name`,`description`,`created`,`modified`) VALUES
-- ('','','','','');
-- INSERT INTO `destinations` (`id`,`created`,`modified`,`name`,`description`) VALUES
-- ('','','','','');
-- INSERT INTO `prices` (`id`,`foreign_id`,`foreign_model`,`location_id`,`price`,`created`,`modified`,`hidden`,`active`,`expires`,`activates`,`original_slots_available`,`current_slots_available`,`line_item_count`) VALUES
-- ('','','','','','','','','','','','','','');
-- INSERT INTO `offices` (`id`,`name`,`location`,`created`,`modified`) VALUES
-- ('','','','','');
-- INSERT INTO `signups` (`id`,`volunteer_id`,`school_id`,`employee_id`,`name`,`email`,`phone`,`created`,`modified`) VALUES
-- ('','','','','','','','','');
-- INSERT INTO `bookings` (`id`,`volunteer_id`,`accepted`,`created`,`modified`,`payment_id`,`paid`,`cancelled`,`line_item_count`) VALUES
-- ('','','','','','','','','');
-- INSERT INTO `spanish_profiles` (`id`,`proficiency_level`,`homestay`,`volunteer_id`,`booking_id`,`created`,`modified`) VALUES
-- ('','','','','','','');
-- INSERT INTO `ecuador_profiles` (`id`,`volunteer_id`,`booking_id`,`created`,`modified`) VALUES
-- ('','','','','');
-- INSERT INTO `promos` (`id`,`name`,`description`,`created`,`modified`,`expires`,`activates`) VALUES
-- ('','','','','','','');
-- INSERT INTO `menus` (`id`,`parent_id`,`page_id`,`lft`,`rght`,`path`,`name`,`created`,`modified`) VALUES
-- ('','','','','','','','','');
-- INSERT INTO `addons` (`id`,`name`,`description`,`created`,`modified`) VALUES
-- ('','','','','');
-- INSERT INTO `fees` (`id`,`name`,`description`,`created`,`modified`) VALUES
-- ('','','','','');
-- INSERT INTO `addon_combinations` (`id`,`base_combination_id`,`addon_id`,`created`,`modified`) VALUES
-- ('','','','','');
-- INSERT INTO `base_combinations` (`id`,`destination_id`,`program_id`,`created`,`modified`) VALUES
-- ('','','','','');
-- INSERT INTO `donations` (`id`,`name`,`description`,`amount`,`reason`,`volunteer_name`,`created`,`modified`,`payment_id`,`booking_id`,`volunteer_id`) VALUES
-- ('','','','','','','','','','','');
-- INSERT INTO `users` (`id`,`username`,`password`,`email`,`role_id`,`location_id`,`created`,`modified`) VALUES
-- ('','','','','','','','');
-- INSERT INTO `campus_summaries` (`id`,`id_employees`,`id_schools`) VALUES
-- ('','','');

