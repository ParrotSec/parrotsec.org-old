build: SHELL:=/bin/bash
build:
	@rm -rf "localhost:8080" parrotsec.org || true;\
	nohup php -S localhost:8080 & echo kill $$! > server.pid;\
	wget -r localhost:8080 || true;\
	mv localhost:8080 website;\
	bash server.pid;\
	rm server.pid nohup.out;\
	python3 compile.py
test:
	php -S localhost:8080
