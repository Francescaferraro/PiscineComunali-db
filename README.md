# PiscineComunali-db
progetto realizzato per l'esame di Basi di dati e web - data di realizzazione: Luglio 2021


# Descrizione del dominio applicativo
Scopo di questo progetto è la realizzazione di una versione semplificata per la
gestione di piscine comunali per un comune di medie/grandi dimensioni. Per
ciascuna piscina, identificata dal nome, si vogliono memorizzare l’indirizzo, un
insieme di numeri di telefono, il periodo di apertura, informazioni sulla struttura quali
numero e tipologia di vasche (all’aperto, al chiuso, olimpioniche, nuoto baby, nuoto
neonatale), numero di corsie per le vasche che possono essere divise in corsie,
periodo di fruizione ed infine i dati del responsabile. Si noti che un responsabile
potrebbe “dirigere” anche più di una piscina nel qual caso interessa sapere quando
è reperibile in ciascuna struttura di cui è responsabile.
Il comune propone dei corsi di nuoto (nuoto baby, ragazzi, adulti, ciascuno con
numero di livelli da I a III) attivati in tutte le strutture, eventualmente con modalità
ed orari differenti; Resta a ciascuna struttura la facoltà di proporre alla propria
utenza dei corsi specifici. Alcuni corsi (nuoto baby e neonatale) possono essere
invece attivati esclusivamente nelle strutture con le apposite vasche. Per ogni corso
svolto preso una struttura si vogliono memorizzare alcune informazioni: il costo, il
numero minimo e massimo di partecipanti, l’orario di svolgimento delle varie edizioni,
e l’eventuale corsia nel quale si tiene).
Gli istruttori possono essere assunti stabilmente dalle strutture, nel qual caso
interessa memorizzare il numero di giorni di ferie disponibili, o possono essere
soggetti a contratti stagionali di durata annuale o una frazione di esso; di ciascun
istruttore interessano i dati anagrafici, i recapiti telefonici e l’elenco delle qualifiche
possedute (ad es. istruttore di nuoto, di fitness, di pallanuoto, ecc.). Si vuole tenere
traccia della storia lavorativa degli istruttori; si noti che un istruttore può aver
lavorato/lavorare in più strutture ma anche può aver sostituito il collega “titolare” più
volte nello stesso anno (ovviamente in periodi differenti). Ogni istruttore può seguire
più edizioni dello stesso corso o di corsi differenti. Le persone iscritte ad una
qualche edizione di un corso, anche più di una, debbono essere registrate e
identificate dal numero della tessera personale rilasciata in fase di iscrizione. Per
poter frequentare è obbligatorio il rilascio di un certificato medico, di durata
stagionale, che attesti l’idoneità alla pratica sportiva. Si vuole mantenere le
informazioni dei medici che hanno rilasciato i certificati, della data della visita e degli
iscritti che siano sprovvisti dello stesso.
