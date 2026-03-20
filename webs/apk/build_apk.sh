#!/bin/bash
PROJECT_DIR=$1
cd $PROJECT_DIR

if [ -f "gradlew" ]; then
    chmod +x gradlew
    ./gradlew assembleDebug
    APK_PATH=$(find . -name "*.apk" | head -n 1)
    
    if [ -f "$APK_PATH" ]; then
        echo "APK generated successfully: $APK_PATH"
    else
        echo "Failed to generate APK"
    fi
else
    echo "gradlew not found in project"
fi