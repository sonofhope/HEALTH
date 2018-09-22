CREATE VIEW dr_profile_view as SELECT users.id, users.name, users.email, doctor.sex, 
doctor.professional, doctor.dob, doctor.phone, doctor.region,
doctor.district, doctor.ward, doctor.lessen, doctor.experience, doctor.address, doctor.pic, 
doctor.dept_id FROM users inner JOIN doctor WHERE users.id=doctor.user_id;

CREATE VIEW service_view as SELECT service.service_name, service_time.day, service_time.start_at, service_time.end_at
from service_time inner JOIN service WHERE service.id = service_time.service_id;

CREATE VIEW sprofile_view as SELECT users.id, users.name, users.email, student.sex, student.yeah_of_study, student.dob, 
student.birth_place, student.current_location, student.phone_no, student.school, student.job_status, student.dept_id FROM users 
inner join student WHERE users.id=student.user_id;