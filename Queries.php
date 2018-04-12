<?php
$BoatResQ = "SELECT * 
			FROM `reserves`
			ORDER BY `date`";
			
$ItemBorrow = "SELECT * 
			FROM `borrows`
			ORDER BY `iid`";
			
$CourseEnrQ = "SELECT * 
			FROM `courses`
			ORDER BY `year`";
$ListBoatQ = "SELECT * 
            FROM `boats`
            ORDER BY `name`";

$ListMemberQ = "SELECT *
                FROM members";

$BoatResQ = "SELECT * 
			FROM `reserves`
			ORDER BY `sid`";
$CommitteeQ = "SELECT * 
			FROM `committees`
			ORDER BY `name`";
$Complicated1 ="SELECT m.name as mname,e.name as ename
                FROM attendse as ae,events as e,members m
                WHERE e.id=ae.eid AND m.id=ae.sid AND NOT EXISTS (SELECT i.id
                                                                FROM inventory as i 
                                                              WHERE i.id NOT IN (SELECT b.iid
                                                                     FROM borrows as b
                                                                     WHERE b.sid = ae.sid))";

$Complicated2 = "SELECT m.name,COUNT(*) AS totalItemBorrowed
FROM members as  m,borrows as b
WHERE m.level = 3 AND m.id = b.sid
GROUP BY m.id";
			
			
			
			?>