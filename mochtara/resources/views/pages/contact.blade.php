<!-- Inclusion de Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>


<style>

.modal-dialog {
    margin: 0 auto;
    max-width: none; 
}

.modal-content {
    background: none; 
    border: none;
    box-shadow: none; 
}
   .chat-message {
    padding: 10px 15px;
    border-radius: 20px;
    margin: 5px;
    max-width: 80%;
    word-wrap: break-word;
    transition: transform 0.3s ease-out, opacity 0.3s ease-out;
    transform: translateY(20px);
    opacity: 0;
}

.chat-message.user {
    align-self: flex-end;
    background-color: #CE1785;  
    color: white;
    transform: translateY(0);
    opacity: 1;
}

.chat-message.system {
    align-self: flex-start;
    background-color: #4caf50;  
    color: white;
    transform: translateY(0);
    opacity: 1;
}

.chat-container {
    width: 450px;
    height: 500px; 
    background-color: #fff;
    border: 1px solid #ccc;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    display: flex;
    flex-direction: column; 
}

.chat-messages {
    flex: 1; 
    overflow: hidden;
    overflow-y: auto; 
    padding: 10px;
    margin-bottom: 10px; 
}

.chat-input {
    border-top: 1px solid #ccc; 
    padding: 10px;
}
.chat-input input {
    flex: 1;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-right: 10px;
    width: 80%;
}

.chat-input button {
    padding: 5px 15px;
    border: none;
    border-radius: 4px;
    background-color: #CE1785;
    color: #fff;
    cursor: pointer;
}

.chat-input button:hover {
    background-color: #14C90D;
}

</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<x-navbar />

<main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2>Contact</h2>
                    <p>Si vous rencontrez des problèmes avec votre commande de design d'impression, n'hésitez pas à
                        contacter notre équipe <em>" MOCHTARA "</em> Nous sommes là pour vous aider à résoudre tout
                        souci ou interrogation que vous pourriez avoir concernant votre commande. Pour une assistance
                        rapide et efficace.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-3">
                    <div class="info-item d-flex">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h4>Location:</h4>
                            <p>Safi City , Morroco, NY 535022</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="info-item d-flex">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h4>Email:</h4>
                            <p>kharbouchikhawla603@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="info-item d-flex">
                        <i class="bi bi-phone flex-shrink-0"></i>
                        <div>
                            <h4>Call:</h4>
                            <p>+212 606265540</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-lg-9">
                    <form action="#" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject"
                                placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                    <div class="col-lg-3 info-item">
                        <i class="bi bi-headphones" data-bs-toggle="modal" data-bs-target="#chatModal"
                            style="cursor: pointer;"></i>
                    </div>

                    <!-- Fenêtre modale de chat -->
                    <div class="modal fade" id="chatModal" tabindex="-1" aria-labelledby="chatModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content" style="border: hidden;background:transparent;">
                                <div class="modal-body">
                                    <div class="chat-container">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="chat-messages" id="chat-messages">
                    
                                        </div>
                                        <div class="chat-input">
                                            <input type="text" id="message" placeholder="Type your message">
                                            <button onclick="sendMessage()">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>

    </section>
    <!-- End Contact Section -->
</main>
<!-- ======= Footer ======= -->
<x-footer />
<!-- End Footer -->
<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>
<div id="preloader">
    <div class="line"></div>
</div>
<x-link_script />

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const chatModal = document.getElementById('chatModal');
        chatModal.addEventListener('shown.bs.modal', function() {
            addMessageToChat(`Bonjour et bienvenue chez Mochtara ! Si vous avez des questions sur notre service, n’hésitez pas à nous les poser.

                              1. C'est quoi Mochtara ?
                              2. Quel est le délai maximum pour finaliser une commande ? 
                              3. Comment contacter l'équipe de Mochtara ? 
                              4. Quelle option est la moins chère en termes de design ? 
                              5. Quelle est la dernière création en matière de design ?

                           N'hésitez pas à choisir l'une de ces questions ou à en poser d'autres. Nous sommes ici pour vous aider !`, 'system');
        });
    });


    function sendMessage() {
        const messageInput = document.getElementById('message');
        const message = messageInput.value.trim().toLowerCase();

        if (message) {
            addMessageToChat(message, 'user');

            setTimeout(() => {
                if (message.includes("hello") || message.includes("bonjour") || message.includes("salam")) {
                    addMessageToChat("Bonjour mon client, Comment puis-je vous aider ?", 'system');
                } else if (message.includes("c'est quoi mochtara")) {
                    addMessageToChat(
                        "Le design chez Mochtara est simple. Commencez avec un t-shirt/un sweat à capuche/un sweat-shirt/etc. à partir de notre vaste inventaire et personnalisez-le rapidement à l'aide de notre studio de design intuitif. Téléchargez vos illustrations ou votre design, ainsi que des modèles de conception pour créer votre propre chemise en un rien de temps.",
                        'system');
                } else if (message.includes("délai maximum pour finaliser une commande")) {
                    addMessageToChat(
                        "Le délai maximum pour finaliser une commande est généralement de 14 jours.",
                        'system');
                } else if (message.includes("contacter l'équipe de mochtara")) {
                    addMessageToChat(
                        "Vous pouvez nous contacter via notre email: kharbouchikhawla603@gmail.com ou par téléphone au +212 606-265540.",
                        'system');
                } else if (message.includes("moins cher de design")) {
                    addMessageToChat("Nos offres de design standard sont les plus économiques.", 'system');
                } else if (message.includes("dernière création en matière de design")) {
                    addMessageToChat(
                        "Notre dernière création est le 'Design Zephyr', un concept moderne et épuré.",
                        'system');
                } else {
                    addMessageToChat(
                        "Je suis désolé, je n'ai pas de réponse à cette question. Veuillez contacter équipe mochtara pour plus information.",
                        'system');
                }
            }, 1000);

            messageInput.value = '';
        }
    }

    function addMessageToChat(message, sender) {
        const chatMessages = document.getElementById('chat-messages');
        const messageElement = document.createElement('div');
        messageElement.textContent = message;
        messageElement.classList.add('chat-message', sender);
        chatMessages.appendChild(messageElement);
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }
</script>


</body>

</html>
