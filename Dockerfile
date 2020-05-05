FROM heroku/php
RUN chmod a+rwx -R /app/user/conv/upload
#RUN JVM_BUILDPACK_URL="https://buildpack-registry.s3.amazonaws.com/buildpacks/heroku/jvm.tgz"; \
#mkdir -p /tmp/jvm-common; \
#curl --silent --location $JVM_BUILDPACK_URL | tar xzm -C /tmp/jvm-common --strip-components=1; \
#source /tmp/jvm-common/bin/util; \
#source /tmp/jvm-common/bin/java; \
#install_java_with_overlay ${BUILD_DIR}

