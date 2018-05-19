build: SHELL:=/bin/bash
build:
	@nohup php7.0 -S localhost:8080 & echo kill $$! > server.pid
	@wget -qr localhost:8080/ || true
	@bash server.pid
	rm server.pid
	mv "localhost:8080" public
