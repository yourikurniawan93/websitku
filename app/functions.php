<?php
declare(strict_types=1);

function e(?string $value): string {
    return htmlspecialchars($value ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
function site_config(string $key): string|bool {
    global $config;
    return $config[$key] ?? '';
}
function url(string $path = ''): string {
    return rtrim((string)site_config('site_url'), '/') . '/' . ltrim($path, '/');
}
function asset(string $path): string { return '/assets/' . ltrim($path, '/'); }
function csrf_token(): string {
    if (empty($_SESSION['csrf_token'])) $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    return $_SESSION['csrf_token'];
}
function verify_csrf(?string $token): bool {
    return is_string($token) && isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}
function active_page(string $page): string {
    return basename($_SERVER['SCRIPT_NAME'] ?? '') === $page ? ' is-active' : '';
}
function whatsapp_url(string $message = 'Halo SANET MEDIA TEKNOLOGI, saya ingin berkonsultasi.') : string {
    $number = preg_replace('/\D+/', '', (string)site_config('whatsapp_number'));
    return 'https://wa.me/' . $number . '?text=' . rawurlencode($message);
}
function page_meta(string $title, string $description): array {
    return ['title' => $title, 'description' => $description];
}
