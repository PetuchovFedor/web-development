PROGRAM SarahRevere(INPUT, OUTPUT);
  {Печать сообщения о том как идут британцы,
   в зависимости от того,первым во входе встречается
  'land' или 'sea'.}
USES dos;
VAR 
  W1, W2, W3, W4, Looking: CHAR;
  Qstr: STRING;
  I: INTEGER;
BEGIN {SarahRevere} 
  WRITELN('Content-Type: text/plain');
  WRITELN;
  Qstr := GetEnv('QUERY_STRING');
  {инициализация W1,W2,W3,W4,Looking}
  W1 := ' ';
  W2 := ' ';
  W3 := ' ';
  W4 := ' ';
  Looking := 'Y';
  I := 1;
  WHILE Looking = 'Y'
  DO
    BEGIN
      {Двигать окно,проверять конец данных}
      W1 := W2;
      W2 := W3;
      W3 := W4;
      W4 := Qstr[I];
      I := I+1;
      IF W4 = '#'
      THEN {Конец данных}
        Looking := 'N';   
      {Проверка окна для  'land'}     
      IF (W1 = 'l') AND (W2 = 'a') AND (W3 = 'n') AND (W4 = 'd')
      THEN{'land' найдено}
        Looking := 'L';
      { Проверка окна для 'sea'}
      IF (W2 = 's') AND (W3 = 'e') AND (W4 = 'a')
      THEN{'sea' найдено}
        Looking := 'S' 
    END;     
  {создать сообщение Sarah}  
  IF Looking = 'L'
  THEN
    WRITELN('The British are coming by land.')
  ELSE
    IF Looking = 'S'
    THEN
      WRITELN('The British coming by sea.')
    ELSE
      WRITELN('Sarah didn''t say')
END. {Sarah revere}