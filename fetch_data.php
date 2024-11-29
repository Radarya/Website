<?php
$supabaseUrl = 'https://olzyruqtxmnrqiocsyob.supabase.co';
$supabaseKey = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6Im9senlydXF0eG1ucnFpb2NzeW9iIiwicm9sZSI6ImFub24iLCJpYXQiOjE3MzI4OTY3NTcsImV4cCI6MjA0ODQ3Mjc1N30.QcgA2HiwAivzQEkR7-D1FpBxaYOLyDGc267OcliiITQ';
$headers = [
    'Authorization: Bearer ' . $supabaseKey,
    'Content-Type: application/json'
];

// Contoh GET data
$url = $supabaseUrl . '/rest/v1/your-table?select=*';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

$data = json_decode($response, true);
print_r($data);
?>
