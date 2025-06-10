<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
$data = json_decode(file_get_contents('php://input'), true);
$userMsg = strtolower(trim($data['message'] ?? ''));

$kb = file_get_contents(__DIR__ . '/vedant_knowledge.txt');

$greetings = [
    "Hey there! 👋",
    "Hello! How can I help you today?",
    "Hi! What would you like to know?",
    "Hey! Ask me anything about Vedant.",
    "Hi there! 😊",
    "Hello! Ready to chat?",
    "Hey! How's your day going?",
    "Hi! Need info about Vedant?",
    "Hello! I'm here to help.",
    "Hey! What brings you here?",
    "Hi! How can I assist you?",
    "Hello! Let's talk.",
    "Hey! Got a question?",
    "Hi! I'm listening.",
    "Hello! How may I assist?",
    "Hey! What can I do for you?",
    "Hi! Ask away.",
    "Hello! How can I support you?",
    "Hey! Let's chat.",
    "Hi! How can I make your day better?"
];

$thanks = [
    "You're welcome! 😊",
    "Glad I could help!",
    "No problem at all.",
    "Anytime!",
    "Happy to assist.",
    "You're most welcome.",
    "It’s my pleasure!",
    "Always here for you.",
    "Glad to be of service.",
    "No worries!",
    "Thank you for reaching out.",
    "You got it!",
    "Let me know if you need anything else.",
    "My pleasure!",
    "Happy to help.",
    "You're very welcome.",
    "Anytime you need me.",
    "Glad to help!",
    "Of course!",
    "Let me know if you have more questions."
];

$generic = [
    "Interesting! Tell me more.",
    "I'm here to help with anything about Vedant.",
    "Could you clarify your question?",
    "Let me know what you want to know.",
    "I'm ready for your next question.",
    "Feel free to ask anything.",
    "I'm listening.",
    "What else can I help you with?",
    "Let's keep chatting!",
    "I'm here for you.",
    "Ask me about Vedant's skills, projects, or anything else.",
    "I'm always ready to help.",
    "What would you like to discuss?",
    "Let me know how I can assist.",
    "I'm here to answer your questions.",
    "Is there something specific you want to know?",
    "I'm happy to chat.",
    "Let’s keep the conversation going.",
    "What’s on your mind?",
    "I'm here whenever you need me."
];

$curses = [
    'asshole','idiot','stupid','dumb','fuck','shit','bastard','bitch','moron','fool','suck','loser','retard','jerk','crap','damn','bloody','bollocks','bugger','arse'
];

foreach ($curses as $curse) {
    if (strpos($userMsg, $curse) !== false) {
        echo json_encode(['reply' => "Sorry, I can't help you with that."]);
        exit;
    }
}

if (preg_match('/\b(hello|hi|hey|yo|sup|hola|namaste|greetings|good morning|good afternoon|good evening)\b/', $userMsg)) {
    $reply = $greetings[array_rand($greetings)];
}

elseif (preg_match('/\b(thank(s| you)?|thx|ty|appreciate|cheers|gracias|dhanyavad)\b/', $userMsg)) {
    $reply = $thanks[array_rand($thanks)];
}
elseif (strpos($userMsg, 'about vedant') !== false) {
    $reply = substr($kb, 0, 300) . '...';
} elseif (strpos($userMsg, 'skills') !== false) {
    $reply = 'Vedant’s core skills: HTML, CSS, JavaScript, PHP, MySQL, React & Three.js.';
} elseif (strpos($userMsg, 'contact') !== false) {
    $reply = 'You can reach Vedant via the contact form on this page or email at vedant@example.com.';
} else {
    $reply = $generic[array_rand($generic)];
}

sleep(2);
echo json_encode(['reply' => $reply]);
?>