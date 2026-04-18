# PHP Docker & K8s Project

This project runs a simple PHP "Hello World" application on both Docker and Kubernetes with local volume mounting.

## Docker Usage
To run with 2 replicas using Docker Compose:
```bash
docker-compose up --build -d
```
Access at: `http://localhost:8080`

## Kubernetes Usage
1. Build the image locally (so K8s can find it):
   ```bash
   docker build -t php-hello-world:latest .
   ```
2. Apply the manifests:
   ```bash
   kubectl apply -f k8s-deployment.yaml
   kubectl apply -f k8s-service.yaml
   kubectl apply -f k8s-hpa.yaml
   ```
3. Check status:
   ```bash
   kubectl get pods
   kubectl get hpa
   ```

Note: Changes to `index.php` on your local system will reflect immediately in all running replicas because it is mounted as a volume.
