ROUTES  
/students -> Lists of all students, each student links to student details page  
/students/create -> Create a new student  
/students/show/{{ $student }} -> Student details page, access edit and delete here  
/students/edit/{{ $student }} -> Edit a student, accessible via student details page  
/students/destroy/{{ $student }} -> Delete a student, accessible via student details page  
