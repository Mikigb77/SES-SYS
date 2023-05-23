# Find all subdirectories containing "LC_MESSAGES" folder
SUBDIRS := $(shell find . -type d -name 'LC_MESSAGES')

# Generate the list of command targets
TARGETS := $(addsuffix /execute, $(SUBDIRS))

# Default target
all: $(TARGETS)

# Target to execute the command in each subdirectory
$(TARGETS):
	@echo "Executing command in $@"
	cd $(dir $@) && rm -f messages.mo && msgfmt messages.po -o messages.mo

.PHONY: all $(TARGETS)
