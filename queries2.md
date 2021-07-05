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


