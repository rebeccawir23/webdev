																																			
CREATE TABLE board_members (
id INTEGER PRIMARY KEY AUTOINCREMENT, 
LastName TEXT, 
FirstName TEXT,
classman INTEGER

);

INSERT INTO board_members VALUES("WIRICK", "REBECCA", 4);
INSERT INTO board_members VALUES("SMITH", "KALEB", 3);
INSERT INTO board_members VALUES("SEO", "KATHERINE", 4);
INSERT INTO board_members VALUES("LAWERANCE", "RYAN", 4);
INSERT INTO board_members VALUES("HOLLAR", "KENDRA", 2);

SELECT * FROM board_members ORDER BY classman;



CREATE TABLE exec_positions(
position TEXT,
rank, INTEGER
)

INSERT INTO exec_positions VALUES("President", 1);
INSERT INTO exec_positions VALUES("VP of Membership", 2);
INSERT INTO exec_positions VALUES("VP of Events", 3);
INSERT INTO exec_positions VALUES("VP of School Pride and Traditions", 4);
INSERT INTO exec_positions VALUES("VP of Communications and Marketing", 5);
INSERT INTO exec_positions VALUES("VP of Finance", 6);
INSERT INTO exec_positions VALUES("VP of Administration", 7);
INSERT INTO exec_positions VALUES("Advisor", 8);


CREATE TABLE exec_members (
id INTEGER PRIMARY KEY AUTOINCREMENT,
LastName TEXT, 
FirstName TEXT, 
position TEXT
);

INSERT INTO exec_members VALUES("Smith", "Kaleb", "Presidnet");
INSERT INTO exec_members VALUES("Schollenbarger", "Brendan", "VP of Membership");
INSERT INTO exec_members VALUES("Hollar", "Kendra", "VP of Events");
INSERT INTO exec_members VALUES("Grgas", "Ariana", "VP of School Pride and Traditions");
INSERT INTO exec_members VALUES("Wirick", "Rebecca", "VP of Communications and Marketing");
INSERT INTO exec_members VALUES("Braseth", "Elise", "VP of Finance");
INSERT INTO exec_members VALUES("Coelha", "Sabrina", "VP of Administration");
INSERT INTO exec_members VALUES("Hamilton", "Lauren", "Advisor");
INSERT INTO exec_members VALUES("Walker", "Kara", "Advisor");

SELECT * FROM exec_members ORDER BY exec_positions.rank;

