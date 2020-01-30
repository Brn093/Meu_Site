<?php 
if(isset($_POST['submit'])){
    $to = "brunofreitas.93@hotmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

















<!--
<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$fone = $_POST['fone'];
$mensagem = $_POST['mensagem'];

$headers = "From: ". $nome;

$corpoemail = 'Fale Conosco - Fabricado a Web
			   
			   Nome:'	.$nome. '
			   Email:'	.$email.'
			   Telefone:'.$fone.'
			   Mensagem:'.$mensagem.' ';

if(mail("brunofreitas.93@hotmail.com", "Fale Conosco", $corpoemail, $headers)){
	echo "<script>alert('Mensagem enviada com sucesso!');</script>";
	header("Location: index.html");
} else{
	echo "<script>alert('Erro ao enviar o email, tente diretamente pelo email brunofreitas.93@hotmail.com');</script>";
}

?>
-->