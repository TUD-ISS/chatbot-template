<!DOCTYPE html>
<html lang="de">
<head>
  <title>Chatbot Experiment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
  <!--
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  -->
  <script src="js/introductionFunctions.js"></script>
  <link rel="stylesheet" href="css/landingPage.css" type="text/css">
</head>

<body>
  <!-- Header -->
	<div class="container-fluid bg-1 text-center">
		<h2>Titel des Chatbot-Experiments</h2>
	</div>

	<!-- Content -->
	<div class="container bg-2" id="content" style="margin-top:40px">
		<div class="row">
			<div class="col-*-*">
				<h4>Herzlich Willkommen zu unserem Experiment.</h4>
			</div>
		</div>

		<div class="row">
			<div class="col-*-*">
				<p><strong>
            <font color=red><output id="errorMessage"></output></font>
          </strong></p>
        <script>
          var varTry =
            <?php
            // check if this is users first try or if he already answered wrong
            if(isset($_POST['try'])){
              // if "try" is set, set varTry to number transmitted from
              // comprehensionQuestions.php
              echo $_POST['try'];
            } else {
              // if "try" is not set, set varTry to 1
              echo 1;
            } ?>;
          // display error message if privacy boxes unchecked or comprehension
          //questions were answered wrong
					errorMessage(varTry);
				</script>

        <!--Content-->
        <p>Dies ist die Landing Page des Experiments. Auf dieser wird den
          Probanden das Experiment erkl??rt und m??glicherweise Begriffe genauer
          definiert. Zum Beispiel kann man hier n??her darauf eingehen, was
          ein Chatbot eigentlich ist. Auch sollte eine gute Einleitung
          formuliert werden: Warum wird das Experiment durchgef??hrt, warum ist
          das wichtig usw. Sprechen Sie die Probanden dabei f??rmlich aber direkt
          an (Sie statt man).</br>
          Hat man einen Anreiz f??r die Probanden teilzunehmen, z. B. ein
          Dankesch??n in Form von <b>f??nf Amazon Gutscheinen im Wert von 10???</b>,
          dann sollte das hier auch Erw??hnung finden.</br>
          Zudem folgt die Beschreibung des Ablaufes des Experiments.

        </p>
				<p>Das Experiment beinhaltet die folgenden Schritte:</p>
				<p><ol>
					<li>Sie benatworten zun??chst ein paar Kontrollfragen, um
            sicherzustellen, dass Sie das Experiment verstanden haben.</li>
					<li>Anschlie??end erscheint ein Chatbot, welcher Ihr pers??nlicher
            Assistent ist. Er soll Ihnen helfen etwas bestimmtes zu tun. Dazu
            notieren Sie sich bitte folgende Informationen:
            <ul>
              <li>Info 1: <b>wichtig</b></li>
              <li>Info 2: <b>auch wichtig</b></li>
            </ul>
            Alle weiteren Daten k??nnen Sie frei w??hlen. Oder auch nicht. Dies
            muss von den Experimentierenden festgelegt werden.</li>
					<li>Nachdem Sie den Antrag mittels des Bots abgeschlossen haben,
            beginnt die Umfrage.</li>
					<li>F??llen Sie die anonyme Umfrage aus und bewerten Sie, wie Sie das
            Experiment wahrgenommen haben.</li>
					<li>Wenn es einen Anreiz gibt, dann k??nnen die Probanden am Ende der
            Umfrage ihre E-Mail angeben, um an der Verlosung teilzunehmen.</li>
				</ol></p>
				<p>Zusammengefasst m??ssen Sie nur mit dem Bot eine bestimmte Aufgabe
          l??sen und die Umfrage abschlie??en, um z. B. der Amazon
          Gutschein-Verlosung teilzunehmen! Dies dauert ca. 10 Minuten. :)</p>
				<p>Um am Experiment teilzunehmen, stimmen Sie bitte der
          Datenschutzerkl??rung sowie der Nutzung der Dienste Dialogflow und
          Forms von Google zu. Klicken Sie dann auf den untenstehenden Button
          und beantworten Sie die Kontrollfragen.
          Anschlie??end beginnt das Experiment.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-*-*">
        <div>
          <input type="checkbox" id="privacy" name="privacy">
          <label for="privacy">
            Ich habe die <a href="gdpr.html">Datenschutzerkl??rung</a>
            gelesen und verstanden.
          </label>
        </div>
        <div>
          <input type="checkbox" id="dialogflow" name="dialogflow">
          <label for="dialogflow">
            Ich bin einverstanden, dass der Google Dienst Dialogflow f??r den
            Betrieb des Chatbots genutzt wird.
          </label>
        </div>
        <div>
          <input type="checkbox" id="forms" name="forms">
          <label for="forms">Ich bin einverstanden, dass der Google Dienst Forms
             f??r die Durchf??hrung der Umfrage genutzt wird.
          </label>
        </div>
				<form>
          <input class="btn button" type="button" onclick="validate(varTry)" value="Zu den Fragen" />
				</form>
			</div>
		</div>

	</div>

</body>
</html>
