// SkillSpace - Pesan Page Interactions

document.addEventListener('DOMContentLoaded', () => {
    const conversations = document.querySelectorAll('.msg__conv');
    const chatPanel = document.getElementById('msg-chat');
    const chatBack = document.getElementById('msg-chat-back');
    const msgEmpty = document.getElementById('msg-empty');

    // Click conversation → open chat (mobile: fullscreen)
    conversations.forEach(conv => {
        conv.addEventListener('click', (e) => {
            e.preventDefault();

            // Mark active
            conversations.forEach(c => c.classList.remove('msg__conv--active'));
            conv.classList.add('msg__conv--active');

            // Show chat panel (mobile)
            if (chatPanel) {
                chatPanel.classList.add('msg__chat--open');
            }

            // Hide empty state
            if (msgEmpty) {
                msgEmpty.style.display = 'none';
            }
        });
    });

    // Back button in chat → close chat (mobile)
    if (chatBack) {
        chatBack.addEventListener('click', () => {
            if (chatPanel) {
                chatPanel.classList.remove('msg__chat--open');
            }
        });
    }

    // Auto-scroll chat to bottom
    const chatBody = document.getElementById('msg-chat-body');
    if (chatBody) {
        chatBody.scrollTop = chatBody.scrollHeight;
    }

    // Send message on Enter
    const inputField = document.getElementById('msg-input-field');
    const sendBtn = document.getElementById('btn-send');

    function sendMessage() {
        if (!inputField || !chatBody) return;
        const text = inputField.value.trim();
        if (!text) return;

        // Create bubble
        const bubble = document.createElement('div');
        bubble.classList.add('msg__bubble', 'msg__bubble--sent');

        const now = new Date();
        const time = now.getHours().toString().padStart(2, '0') + '.' + now.getMinutes().toString().padStart(2, '0');

        bubble.innerHTML = `
            <p>${text}</p>
            <span class="msg__bubble-time">${time}</span>
        `;

        chatBody.appendChild(bubble);
        chatBody.scrollTop = chatBody.scrollHeight;
        inputField.value = '';
        inputField.focus();
    }

    if (inputField) {
        inputField.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' && !e.shiftKey) {
                e.preventDefault();
                sendMessage();
            }
        });
    }

    if (sendBtn) {
        sendBtn.addEventListener('click', sendMessage);
    }
});
