CREATE TABLE time_convert(
country            VARCHAR(100) PRIMARY KEY,
utc                VARCHAR(6)   NOT NULL,
correlated_format VARCHAR(100) NOT NULL
);

INSERT INTO time_convert(country, utc, correlated_format) VALUES ('Midway Islands', '-11:00', 'Pacific/Midway');
INSERT INTO time_convert(country, utc, correlated_format) VALUES ('Hawaii', '-10:00', 'Pacific/Honolulu');
INSERT INTO time_convert(country, utc, correlated_format) VALUES ('Marquesas Islands', '-09:30', 'Pacific/Marquesas');
INSERT INTO time_convert(country, utc, correlated_format) VALUES ('Alaska', '-09:00', 'America/Anchorage');
INSERT INTO time_convert(country, utc, correlated_format) VALUES ('Baja California, America', '-08:00', 'America/Tijuana');
INSERT INTO time_convert(country, utc, correlated_format) VALUES ('Ojinaga, America', '-07:00', 'America/Ojinaga');
INSERT INTO time_convert(country, utc, correlated_format) VALUES ('Galapagos Islands', '-06:00', 'Pacific/Galapagos');
INSERT INTO time_convert(country, utc, correlated_format) VALUES ('Acre', '-05:00', 'America/Rio_Branco	');
INSERT INTO time_convert(country, utc, correlated_format) VALUES ('Thule/Pituffik', '-04:00','America/Thule');
INSERT INTO time_convert(country, utc, correlated_format) VALUES ('Newfoundland, Canada', '-03:30', 'America/St_Johns');
INSERT INTO time_convert(country, utc, correlated_format) VALUES ('Argentina', '-03:00', 'America/Argentina/Cordoba');
INSERT INTO time_convert(country, utc, correlated_format) VALUES ('Atlantic islands', '-02:00', 'America/Noronha');
INSERT INTO time_convert(country, utc, correlated_format) VALUES ('Cape Verde', '-01:00', 'Atlantic/Cape_Verde');
INSERT INTO time_convert(country, utc, correlated_format) VALUES ('Canary Islands','-00:00','Atlantic/Canary');
INSERT INTO time_convert(country, utc, correlated_format) VALUES ('Spain (mainland)', '+01:00', 'Europe/Madrid');
INSERT INTO time_convert(country, utc, correlated_format) VALUES ('Ruthenia','+02:00', 'Europe/Uzhgorod');
INSERT INTO time_convert(country, utc, correlated_format) VALUES ('Syowa','+03:00', 'Antarctica/Syowa');
INSERT INTO time_convert(country, utc, correlated_format) VALUES ('Iran', '+03:30', 'Iran');
INSERT INTO time_convert(country, utc, correlated_format) VALUES ('Astrakhan', '+04:00', 'Europe/Astrakhan');
INSERT INTO time_convert(country, utc, correlated_format) VALUES ('Kabul', '+04:30', 'Asia/Kabul');
INSERT INTO time_convert(country, utc, correlated_format) VALUES ('Uzbekistan','+05:00' ,'Asia/Samarkand');
INSERT INTO time_convert(country, utc, correlated_format) VALUES ('Kolkata', '+05:30', 'Asia/Kolkata');
INSERT INTO time_convert(country, utc, correlated_format) VALUES ('Kathmandu','+05:45', 'Asia/Kathmandu');
INSERT INTO time_convert(country, utc, correlated_format) VALUES ('Vostok', '+06:00', 'Antarctica/Vostok');
INSERT INTO time_convert(country, utc, correlated_format) VALUES ('Rangoon', '+06:30', 'Asia/Rangoon');
INSERT INTO time_convert(country, utc, correlated_format) VALUES ('Borneo (west, central)','+07:00', 'Asia/Pontianak');
INSERT INTO time_convert(country, utc, correlated_format) VALUES ('China', '+08:00', 'Asia/Shanghai');
INSERT INTO time_convert(country, utc, correlated_format) VALUES ('Western Australia, Australia', '+08:45', 'Australia/Eucla');
INSERT INTO time_convert(country, utc, correlated_format) VALUES ('Japan', '+09:00', 'Asia/Tokyo');
INSERT INTO time_convert(country, utc, correlated_format) VALUES ('South Australia, Australia', '+09:30', 'Australia/Adelaide');
INSERT INTO time_convert(country, utc, correlated_format) VALUES ('Vladivostok', '+10:00', 'Asia/Vladivostok');
INSERT INTO time_convert(country, utc, correlated_format) VALUES ('Lord Howe Island', '+11:00', 'Australia/Lord_Howe');
INSERT INTO time_convert(country, utc, correlated_format) VALUES ('New Zealand', '+12:00', 'Antarctica/McMurdo');
INSERT INTO time_convert(country, utc, correlated_format) VALUES ('Chatham Islands','+12:45', 'Pacific/Chatham');
INSERT INTO time_convert(country, utc, correlated_format) VALUES ('Phoenix Islands', '+13:00', 'Pacific/Enderbury');
INSERT INTO time_convert(country, utc, correlated_format) VALUES ('Line Islands, Kiribati','+14:00', 'Pacific/Kiritimati');

CREATE TABLE user_selected(
user_id       INT      PRIMARY KEY AUTO_INCREMENT,
username      VARCHAR(50)  NOT NULL,
country_name  VARCHAR(100) 
);

INSERT INTO user_selected (username, country_name) VALUES ('user_1','Samoa');
