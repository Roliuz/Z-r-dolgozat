/**document.getElementById('kaloria_form').addEventListener('submit', function (e) {
    document.getElementById('eredmeny').style.display = 'none';

    document.getElementById('betolto').style.display = 'block';
    setTimeout(BMIkalkulator, 2000);

    e.preventDefault();
});


function BMIkalkulator(e) {
    const kor = document.getElementById('kor');
    const nem = document.querySelector('input[name="ferfi"]:checked');
    const testsuly = document.getElementById('testsuly');
    const magassag = document.getElementById('magassag');
    const aktivitas = docoument.getElementById('aktivitas').value;
    const kaloriabevitel = document.getElementById('kaloriabevitel');


    if (kor.value === '' || magassag.value === '' || testsuly.value === '' || 80 < kor.value || 15 > kor.value) {
        errorMessage("Kérlek valós értékeket adj meg!")
    } else if (nem.id == "ferfi" && aktivitas === "ulomunka") {
        kaloriabevitel.value = 1.2 * (665 + (13.75 * parseFloat(testsuly.value)) + (5.003 * parseFloat(magassag.value)) -
            (6.755 * parseFloat(age.value)));
    } else if (nem.id == "ferfi" && aktivitas === "mersekaktiv") {
        kaloriabevitel.value = 1.375 * (665 + (13.75 * parseFloat(testsuly.value)) + (5.003 * parseFloat(magassag.value)) -
            (6.755 * parseFloat(age.value)));
    } else if (nem.id == "ferfi" && aktivitas === "aktiv") {
        kaloriabevitel.value = 1.55 * (665 + (13.75 * parseFloat(testsuly.value)) + (5.003 * parseFloat(magassag.value)) -
            (6.755 * parseFloat(age.value)));
    } else if (nem.id == "ferfi" && aktivitas === "nagyonaktiv") {
        kaloriabevitel.value = 1.75 * (665 + (13.75 * parseFloat(testsuly.value)) + (5.003 * parseFloat(magassag.value)) -
            (6.755 * parseFloat(age.value)));
    } else if (nem.id == "no" && aktivitas === "ulomunka") {
        kaloriabevitel.value = 1.2 * (655 + (9.563 * parseFloat(testsuly.value)) + (1.850 * parseFloat(magassag.value)) -
            (4.676 * parseFloat(age.value)));
    } else if (nem.id == "no" && aktivitas === "mersekaktiv") {
        kaloriabevitel.value = 1.375 * (655 + (9.563 * parseFloat(testsuly.value)) + (1.850 * parseFloat(magassag.value)) -
            (4.676 * parseFloat(age.value)));
    } else if (nem.id == "no" && aktivitas === "aktiv") {
        kaloriabevitel.value = 1.55 * (655 + (9.563 * parseFloat(testsuly.value)) + (1.850 * parseFloat(magassag.value)) -
            (4.676 * parseFloat(age.value)));
    } else {
        kaloriabevitel.value = 1.75 * (655 + (9.563 * parseFloat(testsuly.value)) + (1.850 * parseFloat(magassag.value)) -
            (4.676 * parseFloat(age.value)));
    }

    document.getElementById('eredmeny').style.display = 'block';

    document.getElementById('betolto').style.display = 'none';


}

function errorMessage(error) {
    document.getElementById('eredmeny').style.display = 'none';

    document.getElementById('betolto').style.display = 'none';
    const errorDiv = document.createElement('div');
    const card = document.querySelector('.card');
    const heading = document.querySelector('.heading');
    errorDiv.className = 'alert alert-danger';
    errorDiv.appendChild(document.createTextNode(error));

    card.insertBefore(errorDiv, heading);

    setTimeout(clearError, 4000);
}

function clearError() {
    document.querySelector('.alert').remove();
}   **/


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