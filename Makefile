build: SHELL:=/bin/bash
build:
	@rm -rf "localhost:8080" public || true;\
	nohup php -S localhost:8080 & echo kill $$! > server.pid;\
	wget -qr localhost:8080/ || true;\
	bash server.pid;\
	rm server.pid nohup.out;\
	mv "localhost:8080" public;

test:
	php -S localhost:8080
