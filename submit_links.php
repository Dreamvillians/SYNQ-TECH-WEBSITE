<?php
include 'config.php';
session_start();

try {
    // Check if form data is submitted
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Collect form data
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $occupation = $_POST['occupation'];
        $company = $_POST['company'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $email2 = $_POST['email2'];
        $about = $_POST['about'];
        $website = $_POST['website'];
        $linkedin_url = $_POST['linkedin_url'];
        $phone2 = $_POST['phone2'];
        $instagram_url = $_POST['instagram_url'];
        $facebook_url = $_POST['facebook_url'];
        $tiktok_url = $_POST['tiktok_url'];

        $stmt = $conn->prepare("INSERT INTO links (first_name, last_name, occupation, company, phone, email, email2, about, website, linkedin_url, phone2, instagram_url, facebook_url, tiktok_url) 
        VALUES ('" . $first_name . "', '" . $last_name . "', '" . $occupation . "', '" . $company . "', '" . $phone . "', '" . $email . "', '" . $email2 . "', '" . $about . "', '" . $website . "', '" . $linkedin_url . "', '" . $phone2 . "', '" . $instagram_url . "', '" . $facebook_url . "', '" . $tiktok_url . "')");
        $stmt->execute();
        echo json_encode([
            "first_name" => $first_name,
            "last_name" => $last_name,
            "occupation" => $occupation,
            "company" => $company,
            "phone" => $phone,
            "email" => $email,
            "email2" => $email2,
            "about" => $about,
            "website" => $website,
            "linkedin_url" => $linkedin_url,
            "phone2" => $phone2,
            "instagram_url" => $instagram_url,
            "facebook_url" => $facebook_url,
            "tiktok_url" => $tiktok_url
        ]);
    }
} catch (PDOException $e) {
    echo ["error"  => $e->getMessage()];
}

// Close the database connection
$conn = null;
