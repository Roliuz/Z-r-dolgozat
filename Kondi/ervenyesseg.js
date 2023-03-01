const validation = new JustValidate("#regisztracio");

validation
    .addField("#BeviteliVnev", [
        {
            rule: "required",
        },
        {
            rule: "maxLength",
            value: 30
        }
    ])
    .addField("#BeviteliKnev", [
        {
            rule: "required"
        },
        {
            rule: "maxLength",
            value: 30
        }
    ])
    .addField("#BeviteliEmail", [
        {
            rule: "required"
        },
        {
            rule: "email"
        },
        {
            rule: "maxLength",
            value: 20
        },
        // {
        /**validator: (value) => () => {
            return fetch("email-ervenyesseg.php?email=" + encodeURIComponent(value))
                //az encodeURIComponent az értéket(value)
                // egy url kódolású sztringre kódolja 
                .then(function (response) {
                    return response.json();
                })
                .then(function (json) {
                    return json.available;
                });
        },

        errorMessage: "Az email r foglalt."**/
        // }
    ])
    .addField("#BeviteliJelszo", [

        {
            rule: "required"
        },
        {
            rule: "minLength",
            value: 6
        }
    ])
    .addField("#UjraJelszo", [
        {
            validator: (value, fields) => {
                return value === fields["#BeviteliJelszo"].elem.value;
            },
            errorMessage: "A két jelszónak egyeznie kell!"
        }
    ])
    .onSuccess((event) => {
        document.getElementById("regisztracio").submit();
    }
    )