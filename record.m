function [n] = record()

%se creaza un obiect pentru inregistrarea sunetului. Acesta are Sampling
%Frequency de 48.000(depinde de placa audio), cu 16 biti per sample, si se
%inregistreaza folosind un singur channel(mono)
recObj = audiorecorder(48000,16,1);

%se inregistreaza input-ul audio timp de 2 secunde
recordblocking(recObj, 2);

% se extrage data audio din inregistrare
w = getaudiodata(recObj);

%se calculeaza frecventa fundamentala la fiecare frame de timp
f0 = pitch(w,48000,'Range',[120,1000],'Method','PEF');
%folosind teorema valorii finale,se calculeaza frecventa fundamentala ca fiind valoarea in momentul in care
%iesirea ajunge in regim stationar(sunetul ajunge la armonica)
freq = f0(end);

%se calculeaza numarul notei , ! fiind nota cu numarul 1
n = 39.86*log10(freq/440)+49;
n = ceil(n)-1;



end

