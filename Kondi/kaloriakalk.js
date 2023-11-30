


function kaloriakalkulator(obj) {
    const nemek = obj.form.nemek.value; //hivatkozok az input elemekre
    const kor = obj.form.kor.value;
    const testsuly = obj.form.testsuly.value;
    const magassag = obj.form.magassag.value;
    const testzsir = obj.form.testzsir.value;
    const keplet = obj.form.keplet.value;
    const tipus = obj.form.tipus.value;
    const aktivitas = obj.form.aktivitas.value;

    let BMR = " ";

    if (keplet == "mifflin") { //Mifflin képlet
        BMR = Mifflin(kor, nemek, magassag, testsuly, testzsir); //meghívom az értékeket, amikkel majd a későbbbiekben számolni fogok
    } else if (keplet == "revised") { //Revised képlet
        BMR = Revised(kor, nemek, magassag, testsuly, testzsir);
    } else if (keplet == "katch") {
        BMR = Katch(testzsir, testsuly);
    }


    let visszatero = parseFloat(BMR) * parseFloat(aktivitas); //a parsefloat segít kezelni a számokat(nem egész számokat) 

    if (tipus == "kilojul") {
        visszatero = (visszatero * 4.1868);
    }

    document.querySelector(".megjeleno_szoveg").innerHTML = '<div class="container"> <h4 class="p-2 text-center text-white fs-4">Az ajánlott kalóriabeviteled: <span class="text-danger">' + Math.ceil(visszatero) + ' ' + tipus + '/nap </span> a megadott adataid alapján. </h4></div> '
}

function Mifflin(kor, nemek, magassag, testsuly, testzsir) {
    let BMR = (10 * testsuly) + (6.25 * magassag) + (5 * kor) + 5; //férfi esetén
    if (nemek == "no") { //nő esetén
        BMR = (10 * testsuly) + (6.25 * magassag) + (5 * kor) - 161;
    }

    return BMR;

}

function Revised(kor, nemek, magassag, testsuly, testzsir) {
    let BMR = (13.397 * testsuly) + (4.799 * magassag) + (5.677 * kor) + 88.362; //férfi esetén

    if (nemek == "no") {
        BMR = (9.247 * testsuly) + (3.098 * magassag) - (4.330 * kor) + 447.593; //nő esetén
    }

    return BMR;
}

function Katch(testzsir, testsuly) {
    let BMR = 370 + 21.6 * (1 - (testzsir / 100)) * testsuly; //férfi és nő esetén megegyezik
    return BMR;

}