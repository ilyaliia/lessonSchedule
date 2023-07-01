<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Расписание</title>

    <!-- css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="airdatepicker/air-datepicker.css" />
    <link rel="stylesheet" href="css/style.css" />

    <!-- favicon -->
    <link rel="icon" type="image/png" href="img/favicon.png" />
</head>
<body>
    <div class="container mt-5 ">
        <div class="row">
            <div class="col date">
                <input type="text" id="el" class="form-control" placeholder="Выбор даты">
            </div>
            <div class="col gx-5">
                <div class="row h-100">
                    <select class="col form-select">
                        <option selected>Э</option>
                        <option value="ИСП-22-1">ИСП-22-1</option>
                        <option value="ИСП-22-2">ИСП-22-2</option>
                        <option value="ИСП-22-3">ИСП-22-3</option>
                        <option value="ИСП-22-4">ИСП-22-4</option>
                        <option value="ИСП-22-5">ИСП-22-5</option>
                    </select>
                    <select class="col form-select">
                        <option selected>МЧМ</option>
                        <option value="ИСП-22-1">ИСП-22-1</option>
                        <option value="ИСП-22-2">ИСП-22-2</option>
                        <option value="ИСП-22-3">ИСП-22-3</option>
                        <option value="ИСП-22-4">ИСП-22-4</option>
                        <option value="ИСП-22-5">ИСП-22-5</option>
                    </select>
                    <div class="w-100"></div>
                    <select class="col form-select">
                        <option selected>ОМД</option>
                        <option value="ИСП-22-1">ИСП-22-1</option>
                        <option value="ИСП-22-2">ИСП-22-2</option>
                        <option value="ИСП-22-3">ИСП-22-3</option>
                        <option value="ИСП-22-4">ИСП-22-4</option>
                        <option value="ИСП-22-5">ИСП-22-5</option>
                    </select>
                    <select class="col form-select">
                        <option selected>ТМ</option>
                        <option value="ИСП-22-1">ИСП-22-1</option>
                        <option value="ИСП-22-2">ИСП-22-2</option>
                        <option value="ИСП-22-3">ИСП-22-3</option>
                        <option value="ИСП-22-4">ИСП-22-4</option>
                        <option value="ИСП-22-5">ИСП-22-5</option>
                    </select>
                    <div class="w-100"></div>
                    <select class="col form-select">
                        <option selected>ТЭО</option>
                        <option value="ИСП-22-1">ИСП-22-1</option>
                        <option value="ИСП-22-2">ИСП-22-2</option>
                        <option value="ИСП-22-3">ИСП-22-3</option>
                        <option value="ИСП-22-4">ИСП-22-4</option>
                        <option value="ИСП-22-5">ИСП-22-5</option>
                    </select>
                    <select class="col form-select">
                        <option selected>ТТО</option>
                        <option value="ИСП-22-1">ИСП-22-1</option>
                        <option value="ИСП-22-2">ИСП-22-2</option>
                        <option value="ИСП-22-3">ИСП-22-3</option>
                        <option value="ИСП-22-4">ИСП-22-4</option>
                        <option value="ИСП-22-5">ИСП-22-5</option>
                    </select>
                    <div class="w-100"></div>
                    <select class="col form-select">
                        <option selected>ИСП</option>
                        <option value="ИСП-22-1">ИСП-22-1</option>
                        <option value="ИСП-22-2">ИСП-22-2</option>
                        <option value="ИСП-22-3">ИСП-22-3</option>
                        <option value="ИСП-22-4">ИСП-22-4</option>
                        <option value="ИСП-22-5">ИСП-22-5</option>
                    </select>
                    <select class="col form-select">
                        <option selected>МТО</option>
                        <option value="ИСП-22-1">ИСП-22-1</option>
                        <option value="ИСП-22-2">ИСП-22-2</option>
                        <option value="ИСП-22-3">ИСП-22-3</option>
                        <option value="ИСП-22-4">ИСП-22-4</option>
                        <option value="ИСП-22-5">ИСП-22-5</option>
                    </select>
                    <div class="w-100"></div>
                    <select class="col form-select">
                        <option selected>ОСА</option>
                        <option value="ИСП-22-1">ИСП-22-1</option>
                        <option value="ИСП-22-2">ИСП-22-2</option>
                        <option value="ИСП-22-3">ИСП-22-3</option>
                        <option value="ИСП-22-4">ИСП-22-4</option>
                        <option value="ИСП-22-5">ИСП-22-5</option>
                    </select>
                    <select class="col form-select">
                        <option selected>УК</option>
                        <option value="ИСП-22-1">ИСП-22-1</option>
                        <option value="ИСП-22-2">ИСП-22-2</option>
                        <option value="ИСП-22-3">ИСП-22-3</option>
                        <option value="ИСП-22-4">ИСП-22-4</option>
                        <option value="ИСП-22-5">ИСП-22-5</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col"></div>
            <div class="col-1">
                <button type="button" class="btn btn-lg btn-primary">Найти</button>
            </div>
        </div>
    </div>

    <div class="container"><hr></div>

    <div class="container mt-5">
        <div class="row">
            <table class="table table-sm table-secondary">
                <caption>Расписание ИСП-22-4 на 01.01.2024</caption>
                <thead>
                    <tr>
                        <th scope="col">№</th>
                        <th scope="col">Дисциплина</th>
                        <th scope="col">Преподаватель</th>
                        <th scope="col">Аудитория</th>
                        <th scope="col">Изменить</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Математика</td>
                        <td>Ткачева А. Ю.</td>
                        <td>301</td>
                        <td><img class="minus" src="img/minus-icon.png"><img class="edit" src="img/edit-icon.png"></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Математика</td>
                        <td>Ткачева А. Ю.</td>
                        <td>301</td>
                        <td><img class="minus" src="img/minus-icon.png"><img class="edit" src="img/edit-icon.png"></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Математика</td>
                        <td>Ткачева А. Ю.</td>
                        <td>301</td>
                        <td><img class="minus" src="img/minus-icon.png"><img class="edit" src="img/edit-icon.png"></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Математика</td>
                        <td>Ткачева А. Ю.</td>
                        <td>301</td>
                        <td><img class="minus" src="img/minus-icon.png"><img class="edit" src="img/edit-icon.png"></td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Математика</td>
                        <td>Ткачева А. Ю.</td>
                        <td>301</td>
                        <td><img class="plus" src="img/plus-icon.png"></td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Математика</td>
                        <td>Ткачева А. Ю.</td>
                        <td>301</td>
                        <td><img class="plus" src="img/plus-icon.png"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="airdatepicker/air-datepicker.js"></script>
    <script>
        new AirDatepicker('#el', {
            inline: true,   // всегда виден
        })
    </script>

</body>
</html>
