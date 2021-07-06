<!-- 
GROUP BY:
1.Contare quanti iscritti ci sono stati ogni anno
2.Contare gli insegnanti che hanno l'ufficio nello stesso edificio
3.Calcolare la media dei voti di ogni appello d'esame
4.Contare quanti corsi di laurea ci sono per ogni dipartimento
JOINS:
1.Selezionare tutti gli studenti iscritti al Corso di Laurea in Economia
2.Selezionare tutti i Corsi di Laurea del Dipartimento di Neuroscienze
3.Selezionare tutti i corsi in cui insegna Fulvio Amato (id=44)
4.Selezionare tutti gli studenti con i dati relativi al corso di laurea a cui sono iscritti e il relativo dipartimento, in ordine alfabetico per cognome e nome
5.Selezionare tutti i corsi di laurea con i relativi corsi e insegnanti
6.Selezionare tutti i docenti che insegnano nel Dipartimento di Matematica (54)
7.BONUS: Selezionare per ogni studente quanti tentativi d’esame ha sostenuto per superare ciascuno dei suoi esami
:point_right: Non importa se non le fate tutte quante, basta farne 2 o 3 per ciascun gruppo.
_`_ -->

GROUP BY: 

1.Contare quanti iscritti ci sono stati ogni anno

SELECT COUNT(`id`, YEAR(`enrolment_date`)
FROM `students`
GROUP BY YEAR(`enrolment_date`);

2.Contare gli insegnanti che hanno l'ufficio nello stesso edificio

SELECT COUNT(`id`), `office_address`
FROM `teachers`
GROUP BY `office_address`;

3.Calcolare la media dei voti di ogni appello d'esame

SELECT AVG(`vote`), `exam_id`
FROM `exam_student`
GROUP BY `exam_id`;

4.Contare quanti corsi di laurea ci sono per ogni dipartimento

SELECT COUNT(`id`) AS `corsi_di_laurea`, `department_id`
FROM `degrees`
GROUP BY `department_id`;


JOINS:

1.Selezionare tutti gli studenti iscritti al Corso di Laurea in Economia

SELECT students.id, students.name, students.surname, students.registration_number, students.degree_id
FROM students
JOIN degrees
ON students.degree_id = degrees.id
WHERE degrees.name = "Corso di Laurea in Economia";


2.Selezionare tutti i Corsi di Laurea del Dipartimento di Neuroscienze

SELECT degrees.*
FROM degrees
JOIN departments
ON degrees.department_id = departments.id
WHERE departments.name = "Dipartimento di Neuroscienze";

3.Selezionare tutti i corsi in cui insegna Fulvio Amato (id=44)

SELECT courses.*
FROM courses
JOIN course_teacher
ON courses.id = course_teacher.course_id
WHERE course_teacher.teacher_id = 44;

4.Selezionare tutti gli studenti con i dati relativi al corso di laurea a cui sono iscritti e il relativo dipartimento, in ordine alfabetico per cognome e nome

SELECT students.name, students.surname, degrees.name, departments.name
FROM students
JOIN degrees
ON students.degree_id = degrees.id
JOIN departments
ON degrees.department_id = departments.id
ORDER BY students.surname, students.name ASC;

5.Selezionare tutti i corsi di laurea con i relativi corsi e insegnanti

SELECT degrees.name AS corso_di_laurea, courses.name AS corso, teachers.name, teachers.surname
FROM degrees
JOIN courses
ON degrees.id = courses.degree_id
JOIN course_teacher
ON courses.id = course_teacher.course_id
JOIN teachers
ON teachers.id = course_teacher.teacher_id;

6.Selezionare tutti i docenti che insegnano nel Dipartimento di Matematica (54)

SELECT DISTINCT teachers.id
FROM teachers
JOIN course_teacher
ON teachers.id = course_teacher.teacher_id
JOIN courses
ON course_teacher.course_id = courses.id
JOIN degrees
ON courses.degree_id = degrees.id
JOIN departments
ON degrees.department_id = departments.id
WHERE departments.name = "Dipartimento di Matematica"
ORDER BY teachers.id ASC;















