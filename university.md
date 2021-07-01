<!-- Modellizzare la struttura di una tabella per memorizzare tutti i dati riguardanti una università:
- sono presenti diversi dipartimenti, ciascuno con i propri corsi di laurea;
- ogni corso di laurea è formato da diversi corsi;
- ogni corso può essere tenuto da diversi insegnanti e prevede più appelli d'esame;
- ogni studente è iscritto ad un corso di laurea;
- per ogni appello d'esame a cui lo studente ha partecipato, è necessario memorizzare il voto ottenuto, anche se non sufficiente
Nella cartella della repo create un file struttura.md nel quale inserite la stuttura delle tabelle come fatto in classe con me.
Poi usate diagrams.net per creare il diagramma E-R. Completato il diagramma cliccate nel menu in altro su FILE > EMBED > HTML per esportare il diagramma in formato html.
Copiate il codice che vi dá, create nella repo un file index.html e nel body incollate il codice come fatto in classe stamattina.
 -->

 ## dipartimenti

 - id
 - nome

 ## corsi_di_laurea

 - id
 - nome

 ## corsi

 - id
 - nome

 ## insegnanti

 - id
 - nome
 - nome
 - cognome
 - email

 ## appelli

 - id
 - data

 ## studenti

 - id
 - matricola
 - nome
 - cognome
 - data_di_nascita
 - email

 ## voti

 - appelli_id
 - studenti_id
 - voto