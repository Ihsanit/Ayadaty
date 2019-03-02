ALTER table city
ADD CONSTRAINT c_country_id_fk FOREIGN KEY(c_country_id)
REFERENCES country(country_id);

ALTER table doctor
ADD CONSTRAINT city_id_fk FOREIGN KEY(d_city_address)
REFERENCES city(city_id);