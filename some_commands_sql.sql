ALTER TABLE `employee` ADD `emp_employ_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP AFTER `emp_salary`;
ALTER TABLE `doctor` ADD `d_sname` VARCHAR(30) NOT NULL AFTER `d_fname`, ADD `d_lname` VARCHAR(30) NOT NULL AFTER `d_sname`, ADD `d_email` VARCHAR(50) NOT NULL AFTER `d_lname`, ADD UNIQUE (`d_email`);
ALTER TABLE `doctor` ADD `d_salary` FLOAT NOT NULL AFTER `d_address`, ADD `d_employ_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP AFTER `d_salary`;
ALTER TABLE `doctor` ADD CONSTRAINT `d_specialty_id_fk` FOREIGN KEY (`d_speciality_id`) REFERENCES `specialty`(`specialty_id`) ON DELETE CASCADE ON UPDATE RESTRICT;
ALTER TABLE `appointment` ADD CONSTRAINT `appt_patient_id_fk` FOREIGN KEY (`appt_patient_id`) REFERENCES `patient`(`p_id`) ON DELETE RESTRICT ON UPDATE RESTRICT; ALTER TABLE `appointment` ADD CONSTRAINT `appt_doctor_id_fk` FOREIGN KEY (`appt_doctor_id`) REFERENCES `doctor`(`d_id`) ON DELETE RESTRICT ON UPDATE RESTRICT; ALTER TABLE `appointment` ADD CONSTRAINT `appt_visit_id_fk` FOREIGN KEY (`appt_visit_id`) REFERENCES `visit`(`visit_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `record` ADD CONSTRAINT `rec_appt_id_fk` FOREIGN KEY (`rec_appt_id`) REFERENCES `appointment`(`appt_id`) ON DELETE RESTRICT ON UPDATE RESTRICT; ALTER TABLE `record` ADD CONSTRAINT `rec_visit_id_fk` FOREIGN KEY (`rec_visit_id`) REFERENCES `visit`(`visit_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;



