PROGRAM SarahRevere(INPUT, OUTPUT);
USES 
  DOS;
VAR
  QStr, Str, OutStr: STRING;
  I: INTEGER;
BEGIN
  //http://localhost:4001/cgi-bin/task2.cgi/?lanterns=1
  WRITELN('Content-Type: text/plain');
  WRITELN;
  I := 1;
  QStr := GetEnv('QUERY_STRING');
  Str := COPY(QStr, POS('lanterns=', QStr) + LENGTH('lanterns='), LENGTH(QStr) - LENGTH('lanterns=') + 1);
  WHILE (Str[i] <> '&') AND (I < LENGTH(Str))
  DO
    BEGIN
      OutStr := OutStr + Str[I];
      INC(I)
    END;
  IF Str[I] <> '&'
  THEN
    OutStr := OutStr + Str[I];
  IF OutStr = '1'
  THEN
    WRITELN('The British are coming by land.')
  ELSE
    IF OutStr = '2'
    THEN
      WRITELN('The British coming by sea.')
    ELSE
      WRITELN('Sarah didn''t say')
END.
