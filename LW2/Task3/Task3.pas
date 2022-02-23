PROGRAM HelloName(INPUT, OUTPUT);
USES dos;
VAR
  S, Name: STRING;
  X1, X2: INTEGER;
BEGIN
  // http://localhost:4001/cgi-bin/prog2.cgi/?name=ivan
  WRITELN('Content-Type: text/plain');
  WRITELN;
  Name := GetEnv('QUERY_STRING');
  S := 'Hello dear, Roma!';
  X1 := Pos('!', S);
  IF X1 <> 0
  THEN
    BEGIN
      X2 := Pos(',', S);
      Name:=Copy(S, X2 + 1, X1 - (X2 + 1));
      WRITELN('Hello dear,', Name, '!')
    END
  ELSE
    BEGIN
      Name := ' ';
      WRITELN('Hello dear, Anomymous!')
    END
END.
