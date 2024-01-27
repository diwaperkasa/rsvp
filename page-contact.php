<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        send_quotation_email();
    } catch (\Throwable $th) {
        return wp_send_json([
            "message" => $th->getMessage()
        ], 400);
    }

    return wp_send_json([
        "message" => "Thank you for contacting us."
    ], 200);
}

return get_layout("contact.php");