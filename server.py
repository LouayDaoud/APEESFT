#!/usr/bin/env python3
"""
Serveur HTTP simple pour le projet APEESFT
Redirige automatiquement vers demo/index.html
"""
import http.server
import socketserver
import os
from urllib.parse import urlparse

PORT = 8000

class CustomHTTPRequestHandler(http.server.SimpleHTTPRequestHandler):
    def do_GET(self):
        # Si on accède à la racine, rediriger vers demo/index.html
        if self.path == '/' or self.path == '/index.html':
            self.send_response(302)
            self.send_header('Location', '/demo/index.html')
            self.end_headers()
            return
        
        # Sinon, servir les fichiers normalement
        return super().do_GET()
    
    def end_headers(self):
        # Ajouter des en-têtes pour éviter le cache en développement
        self.send_header('Cache-Control', 'no-cache, no-store, must-revalidate')
        self.send_header('Pragma', 'no-cache')
        self.send_header('Expires', '0')
        super().end_headers()

def main():
    # Changer vers le répertoire du script
    os.chdir(os.path.dirname(os.path.abspath(__file__)))
    
    with socketserver.TCPServer(("", PORT), CustomHTTPRequestHandler) as httpd:
        print("=" * 50)
        print("  Serveur APEESFT démarré")
        print("=" * 50)
        print(f"\nLe site est accessible sur : http://localhost:{PORT}")
        print("\nAppuyez sur Ctrl+C pour arrêter le serveur\n")
        httpd.serve_forever()

if __name__ == "__main__":
    main()

