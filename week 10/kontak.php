CREATE TABLE kontak (
	id int(4) NOT NULL,
    	nama varchar(30) NOT NULL,
    	jkel varchar(10),
    	email varchar(40),
    	alamat varchar(50),
	kota  varchar(20),
	pesan text
) ENGINE=INNODB DEFAULT CHARSET=latin1;

ALTER TABLE kontak
	ADD PRIMARY KEY (id);
ALTER TABLE kontak
	MODIFY id INT(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
