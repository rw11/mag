<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <!-- Include Date Range Picker -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">

    <script>
        $(document).ready(function () {
            var date_input = $('input[name="date"]'); //our date input has the name "date"
            var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
            date_input.datepicker({
                format: 'yyyy-mm-dd',
                container: container,
                todayHighlight: true,
                autoclose: true,
            })
        })
    </script>

    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Add a gray background color and some padding to the footer */
        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Magazyn</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Lsta urządzeń</a></li>
                <li><a href="#">Wydaj urządzenie</a></li>
                <li><a href="#">Dodaj urządzenie</a></li>
                <li><a href="#">Contact</a></li>
                <li>
                    <nav class="navbar navbar-light bg-light">
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="search" placeholder="Numer urządzenia"
                                   aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Znajdź</button>
                        </form>
                    </nav>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Zaloguj</a></li>
            </ul>
        </div>
    </div>
</nav>
<br>
<div class="container-fluid bg-3 text-center">
    <div class="row">
        <form>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputNrSeryjny">Numer seryjny</label>
                    <input type="text" class="form-control" id="inputNrSeryjny" placeholder="Numer seryjny">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputNrSeryjny">Numer wejścia</label>
                    <input type="text" class="form-control" id="inputNrSeryjny" placeholder="Numer seryjny">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputNazwa">Nazwa</label>
                    <input type="text" class="form-control" id="inputNazwa" placeholder="Nazwa">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputNrSeryjny">SKU</label>
                    <input type="text" class="form-control" id="inputNrSeryjny" placeholder="Numer seryjny">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-2"> <!-- Date input -->
                    <label class="control-label" for="date">Data dostawy</label>
                    <input class="form-control" id="date" name="date" placeholder="RRRR-MM-DD" type="text"/>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputZip">Numer dokumentu</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="form-group col-md-2"> <!-- Date input -->
                    <label class="control-label" for="date">Data przyjęcia</label>
                    <input class="form-control" id="date" name="date" placeholder="RRRR-MM-DD" type="text"/>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Osoba przyjmująca</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-2"> <!-- Date input -->
                    <label class="control-label" for="date">Data wydania</label>
                    <input class="form-control" id="date" name="date" placeholder="RRRR-MM-DD" type="text"/>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Osoba odbierająca</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Osoba wydająca</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputState">Typ dostawy</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-2"> <!-- Date input -->
                    <label class="control-label" for="date">Data instalacji</label>
                    <input class="form-control" id="date" name="date" placeholder="RRRR-MM-DD" type="text"/>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputZip">Numer zlecenia</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Osoba instalująca</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-2"> <!-- Date input -->
                    <label class="control-label" for="date">Data zwrotu urządzenia</label>
                    <input class="form-control" id="date" name="date" placeholder="RRRR-MM-DD" type="text"/>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputState">Osoba zwracająca urządzenie</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Osoba przyjmująca urządzenie</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-2"> <!-- Date input -->
                    <label class="control-label" for="date">Data wysyłki urządzenia</label>
                    <input class="form-control" id="date" name="date" placeholder="RRRR-MM-DD" type="text"/>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Numer przesyłki</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-2"> <!-- Date input -->
                    <label class="control-label" for="date">Data zwrotu dokumentów</label>
                    <input class="form-control" id="date" name="date" placeholder="RRRR-MM-DD" type="text"/>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Osoba zwracająca dokumenty</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Osoba przyjmująca dokumenty</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="multiple-checkboxes">Oddane dokumenty:</label>
                    <select id="multiple-checkboxes" multiple="multiple">
                        <option value="php">PHP</option>
                        <option value="javascript">JavaScript</option>
                        <option value="java">Java</option>
                        <option value="sql">SQL</option>
                        <option value="jquery">Jquery</option>
                        <option value=".net">.Net</option>
                    </select>
                </div>

                <script type="text/javascript">
                    $(document).ready(function () {
                        $('#multiple-checkboxes').multiselect({
                            buttonWidth: '220px',
                            buttonText: function (options, select) {
                                if (options.length === 0) {
                                    return 'Wybierz dokumenty';
                                }
                                else if (options.length > 10) {
                                    return 'Zaznaczono więcej niż 10 pozycji!';
                                }
                                else {
                                    var labels = [];
                                    options.each(function () {
                                        if ($(this).attr('label') !== undefined) {
                                            labels.push($(this).attr('label'));
                                        }
                                        else {
                                            labels.push($(this).html());
                                        }
                                    });
                                    return labels.join(', ') + '';
                                }
                            }
                        });
                    });
                </script>
            </div>
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for=" Email1msg">Błędy w dokumentach:</label>
                    <textarea class="form-control" rows="1"></textarea>
                </div>
                <div class="form-group col-md-2"> <!-- Date input -->
                    <label class="control-label" for="date">Data wysyłki dokumentów</label>
                    <input class="form-control" id="date" name="date" placeholder="RRRR-MM-DD" type="text"/>
                </div>
                <div class="form-group col-md-2">
                    <label for="wyslane_dokumenty">Wysłane dokumenty:</label>
                    <select id="wyslane_dokumenty" multiple="multiple">
                        <option value="php">PHP</option>
                        <option value="javascript">JavaScript</option>
                        <option value="java">Java</option>
                        <option value="sql">SQL</option>
                        <option value="jquery">Jquery</option>
                        <option value=".net">.Net</option>
                    </select>
                </div>

                <script type="text/javascript">
                    $(document).ready(function () {
                        $('#wyslane_dokumenty').multiselect({
                            buttonWidth: '220px',
                            buttonText: function (options, select) {
                                if (options.length === 0) {
                                    return 'Wybierz dokumenty';
                                }
                                else if (options.length > 10) {
                                    return 'Zaznaczono więcej niż 10 pozycji!';
                                }
                                else {
                                    var labels = [];
                                    options.each(function () {
                                        if ($(this).attr('label') !== undefined) {
                                            labels.push($(this).attr('label'));
                                        }
                                        else {
                                            labels.push($(this).html());
                                        }
                                    });
                                    return labels.join(', ') + '';
                                }
                            }
                        });
                    });
                </script>
            </div>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="inputZip">Numer przesyłki</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="form-group col-md-10">
                    <label for=" Email1msg">Uwagi:</label>
                    <textarea class="form-control" rows="1"></textarea>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </div>
        </form>
    </div>
</div>
<br><br>

<footer class="container-fluid text-center">
    <p>Footer Text</p>
</footer>

</body>
</html>
