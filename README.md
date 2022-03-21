# Descrierea Aplicatiei

_**Proiect realizat de Pandurita Gabriel si Panaite Andra - Nicoleta**_

Video demo : https://www.youtube.com/watch?v=GIsiKEPk5kQ&ab_channel=D3zhu169

Aplicatia realizata are ca scop generarea unei partituri muzicale ce este construita in
mod automat dupa prelucrarea sunetelor redate de utilizator. Dupa generarea partiturii, aceasta
este afisata pe ecran si exista posibilitatea de a fi descarcata in format PDF. De asemenea, se
poate descarca si melodia inregistrata de utilizator si aferenta partiturii, cat si audierea acesteia
prin intermediul aplicatiei fiind evidentiata nota curenta de pe partitura.

Aplicatia a fost dezvoltata sub forma de aplicatie web, iar pentru dezvoltarea
ei s-au folosit resurse dupa cum urmeaza: pentru dezvoltarea FRONTEND s-a utilizat HTML,
CSS si JavaScript, pentru procesarea si recunoasterea sunetelor s-a utilizat MATLAB, iar
pentru dezvoltarea BACKEND s-a utilizat PHP.

Pentru un timp de raspuns cat mai bun al functionalitatilor ce utilizeaza MATLAB (atat
procesarea si interpretarea de sunet cat si gestiunea acestora), dar si pentru a putea integra
functii MATLAB la nivel de server web, a fost utilizat produsul „MATLAB Production
Server” de la MathWorks. Acesta accepta cereri (consecutive sau
simultane) venite din partea aplicatiei client,fiind mereu pregatit sa trateze aceste cereri. In
acest mod, timpul de executie total este redus foarte mult. Aplicatia client este realizata in
Java, si face legatura intre aplicatia web(server-ul web) si server-ul MATLAB. Aceasta
reprezinta o colectie de clase parametrizate, fiecare reprezentand o anumita functie MATLAB
ce trebuie rulata pe server. Clasa este construita folosind parametrii de intrare ce vin din
aplicatia web, formuleaza si trimite o cerere catre server-ul MATLAB, colecteaza raspunsul
functiei si il transmite inapoi catre aplicatia web. 
