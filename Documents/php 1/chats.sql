create table users
(
	uid integer primary key auto_increment,
	uname varchar(30) not null,
	email varchar(50) not null,
	password varchar(16) not null,
	active integer default 0
);

create table groups
(
	gid integer primary key auto_increment,
	gname varchar(20),
	nums integer default 0
);

create table member
(
	uid integer,
	gid integer,
	foreign key(uid) references users(uid),
	foreign key(gid) references groups(gid),
	roles varchar(1) not null,
	primary key(uid,gid)
);

create table message
(
	uid integer,
	gid integer,
	mid integer primary key auto_increment,
	msg long text not null,
	foreign key(uid) references users(uid),
	foreign key(gid) references groups(gid),
	ip varchar(20) not null,
	ts timestamp not null
);
