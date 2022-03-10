PROGRAM HelloName(INPUT, OUTPUT);
USES
  DOS;
  //http://localhost:4001/cgi-bin/task3.cgi/?name=Fedya
VAR
  QName, Str, OutStr: STRING;
  Index, I: INTEGER;
BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  QName := GetEnv('QUERY_STRING');
  Index := POS('name=', QName);
  Str := COPY(QName, POS('name=', QName) + LENGTH('name='), LENGTH(QName) - LENGTH('name=') + 1);
  IF Index >= 1
  THEN
    FOR I := Index+LENGTH('=name') TO LENGTH(QName)
    DO
      IF QName[I] <> '&'
      THEN
        OutStr := OutStr + QName[I]
      ELSE
        BREAK;
  IF OutStr = ''
  THEN
    WRITELN('Hello Anonymous!')
  ELSE
    WRITELN('Hello dear, ', OutStr, ' !');
END.