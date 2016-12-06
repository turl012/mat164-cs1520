drop table Messages;

create table Messages (
  name varchar(32) not null,
  email varchar(32) not null,
  msg varchar(140) not null,
  constraint pk_Messages primary key(name, email, msg)
);
