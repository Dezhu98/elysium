function [] = playSong(notes)
n = length(notes);
song = [];
for i=1:n
    a = string(notes(i));
    switch a
        case 'C3'
            y = audioread("C3.mp3");
        case 'D3'
            y = audioread("D3.mp3");
        case 'C3Sharp'
            y = audioread("C3Sharp.mp3");
        case 'D3Sharp'
            y = audioread("D3Sharp.mp3");
        case 'E3'
            y = audioread("E3.mp3");
        case 'F3'
            y = audioread("F3.mp3");
        case 'F3Sharp'
            y = audioread("F3Sharp.mp3");
        case 'G3Sharp'
            y = audioread("G3Sharp.mp3");
        case 'G3'
            y = audioread("G3.mp3");
        case 'A4'
            y = audioread("A4.mp3");
        case 'A4Sharp'
            y = audioread("A4Sharp.mp3");
        case 'B4'
            y = audioread("B4.mp3");
        case 'C4'
            y = audioread("C4.mp3");
        case 'D4'
            y = audioread("D4.mp3");
        case 'C4Sharp'
            y = audioread("C4Sharp.mp3");
        case 'D4Sharp'
            y = audioread("D4Sharp.mp3");
        case 'E4'
            y = audioread("E4.mp3");
        case 'F4'
            y = audioread("F4.mp3");
        case 'F4Sharp'
            y = audioread("F4Sharp.mp3");
        case 'G4Sharp'
            y = audioread("G4Sharp.mp3");
        case 'G4'
            y = audioread("G4.mp3");
        case 'A5'
            y = audioread("A5.mp3");
        case 'A5Sharp'
            y = audioread("A5Sharp.mp3");
        case 'B5'
            y = audioread("B5.mp3");
        case 'C5'
            y = audioread("C5.mp3");
    end  
    song = [song;y];
end
    audiowrite("C:/xampp/htdocs/elysium/song.wav",song,44100);
end

