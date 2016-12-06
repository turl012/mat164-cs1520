drop table Messages;

create table Messages (
  name varchar(32) not null,
  email varchar(32) not null,
  msg varchar(140) not null,
  constraint pk_Messages primary key(name, email, msg)
);

DELIMITER //
CREATE TRIGGER avoid_empty
    BEFORE INSERT ON Messages
        FOR EACH ROW
        BEGIN
        IF new.name = '' THEN SET new.name = NULL;
        ELSEIF new.email = '' THEN SET new.email = NULL;
        ELSEIF new.msg = '' THEN SET new.msg = NULL;
        ELSEIF new.msg = 'Please Type Your Message' THEN SET new.msg = NULL;
        END IF;
END; //
DELIMITER ;
