podman build -t directory-lister:latest .
podman save -o images/directory-lister.latest.tar directory-lister:latest
# podman image prune -a -f
