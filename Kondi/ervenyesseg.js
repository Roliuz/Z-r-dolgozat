const validation = new JustValidate("#regisztracio");

validation
    .addField("#BeviteliVnev", [
        {
            rule: "required",
        },
        {
            rule: "maxLength",
            value: 50
        }
    ])
    .addField("#BeviteliKnev", [
        {
            rule: "required"
        },
        {
            rule: "maxLength",
            value: 50
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
            value: 50
        },

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