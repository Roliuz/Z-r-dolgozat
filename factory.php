<?php

interface Gyar
{
    public function GyartottTermekA(): AltalanosTermekA;
    public function GyartottTermekB(): AltalanosTermekB;
}

class Gyar1 implements Gyar
{
    public function GyartottTermekA(): AltalanosTermekA
    {
        return new KonkretTermekA1;
    }

    public function GyartottTermekB(): AltalanosTermekB
    {
        return new KonkretTermekB1;
    }
}

class Gyar2 implements Gyar
{
    public function GyartottTermekA(): AltalanosTermekA
    {
        return new KonkretTermekA1;
    }

    public function GyartottTermekB(): AltalanosTermekB
    {
        return new KonkretTermekB1;
    }
}
    interface AltalanosTermekA1 {
        public function Hasznalat () : string;
    }

    class KonkretTermekA1 implements AltalanosTermekA{
        public function Hasznalat() : string {
            return " Az A1 eredménye.";
        }

    }
    class KonkretTermekA2 implements AltalanosTermekB
    {
    public function Hasznalat(): string
    {
        return " Az A2 eredménye.";
    }
    
}
    interface AltalanosTermekB{
        public function Hasznalat() : string;
        public function MasikHasznalat(AltalanosTermekA $egyuttmukodes):string;
    }

    class KonkretTermekB1 implements AltalanosTermekB {
        public function Hasznalat() : string{
            return "A B1 termék eredménye.";
        }
    }
   
    public function MasikHasznalat (AltalanosTermekA $egyuttmukodes){
        $eredmeny = $egyuttmukodes -> Hasznalat();
        return "Eggyúttműködve a ({$eredmeny}) a B2 eredménye.";
    }

    function KliensKod(Gyar $Gyar){
        $termekA = $Gyar -> GyartottTermekA();
        $termekB = $Gyar -> GyartottTermekB();

        echo $termekB-> Hasznalat(). "<br>";
        echo $termekB-> MasikHasznalat();
    }

    echo "Kliens: Kód tesztelése az első gyári típussal:"."<br>";
    KliensKod(new Gyar1());

    echo "<br>";

    echo "Kliens: Kód tesztelése a második gyári típussal"."<br>";
    KliensKod(new Gyar2());
?>